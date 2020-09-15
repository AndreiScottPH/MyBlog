<?php

require_once 'database_connection.php';

session_start();

function len_max($string, $value, $message)
{
    global $add_error;
    if (strlen($string) > 0 && strlen($string) < $value) {
        return true;
    } else {
        $add_error = $message;
        return false;
    }
}

if ($_SESSION['admin']) {

    ///проверка привышения длин строк
    if (!empty($_POST)) {
        if (len_max($_POST['heading'], 70, "Превышена длина заголовка либо заголовок пуст")) {
            if (len_max($_POST['content'], 65535, "Превышена длина статьи или статья пуста")) {
                $str_len = true;
            } else {
                $str_len = false;
            }
        } else {
            $str_len = false;
        }
    }


    ///Проверка изображения
    $image_error = [1 => 'Превышен макс. размер файла, указанный в php.ini',
        2 => 'Превышен максимальный размер файла.',
        3 => 'Загружаемый файл был получен только частично.',
        4 => 'Файл не был загружен.'];

    if($_FILES['file_image']['error'] == 4){
        $img_bool = true;
    }
    if ($_FILES['file_image']['error'] > 0 && $_FILES['file_image']['error'] < 4) {
        $add_error = $image_error[$_FILES['file_image']['error']];
        $img_bool = false;
    } else {
        if (!empty($_FILES['file_image']) && $_FILES['file_image']['error'] == 0) {
            ///Определяет, был ли файл загружен при помощи HTTP POST
            if (is_uploaded_file($_FILES['file_image']['tmp_name'])) {
                //является ли изображением
                if (exif_imagetype($_FILES['file_image']['tmp_name'])) {
                    $img_bool = true;
                } else {
                    $img_bool = false;
                    $add_error = "Файл не является изображением";
                }
            } else {
                handle_error('Обнаружена попытка мошенничества', $_FILES['file_image']['error']);
            }
        }
    }

    if ($str_len && $img_bool) {
        if ($_FILES['file_image']['error'] == 4) {
            $art_image_id=NULL;
            goto text;
        } else {
            ///получение данных о изображении
            $filename = trim($_FILES['file_image']['name']);
            $file_size = $_FILES['file_image']['size'];
            $file_info = getimagesize($_FILES['file_image']['tmp_name']);
            $file_type = $file_info['mime'];
            $file_data = file_get_contents($_FILES['file_image']['tmp_name']);
            ///загрузка в базу данных
            $img_query = sprintf("INSERT INTO images (filename, file_size, image_data, mime_type) VALUE ('%s', %d, '%s', '%s')",
                $mysqli->real_escape_string($filename), $mysqli->real_escape_string($file_size), $mysqli->real_escape_string($file_data),
                $mysqli->real_escape_string($file_type));
        $mysqli->query($img_query);
            $art_image_id = $mysqli->insert_id;
        }

        ///////////обработка данных/////////////
        text:
        $heading = trim($_POST['heading']);
        $content = trim($_POST['content']);
        $data_query = sprintf("INSERT INTO articles (heading, content, art_image_id) VALUE ('%s', '%s', %d)",
            $mysqli->real_escape_string($heading), $mysqli->real_escape_string($content), $mysqli->real_escape_string($art_image_id));
        $mysqli->query($data_query);
        $message = "Статья создана";
        header("Location: index.php");
        exit();
    }
} else {
    header("Location:/index.php");
    exit();
}
