<?php
require_once 'scripts/authorize.php';
require_once 'scripts/authentication.php';
require_once 'scripts/create_article.php';
require_once 'layouts/header.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <title>Мой блог</title>
    <link href="css/main.css" rel="stylesheet">
</head>
<body class="add-article-page">
<?php
header_view($header_error);
?>
<main class="add-article">
    <div class="_container">
        <div class="add-article__message"><?= $add_error; ?></div>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="add-article__form form-add-article" enctype="multipart/form-data">
            <label for="heading" class="form-add-article__label">Заголовок:</label>
            <input id="heading" class="form-add-article__heading" name="heading" placeholder="Заголовок" value="<?= $_POST['heading']; ?>">
            <label for="content" class="form-add-article__label">Содержание:</label>
            <textarea name="content" id="content" class="form-add-article__textarea" placeholder="Содержание"><?= $_POST['content']; ?></textarea>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
            <label for="file_image" class="form-add-article__label">Изображение:</label>
            <input type="file" id="file_image" name="file_image" class="form-add-article__file">
            <button class="form-add-article__submit" type="submit">опубликовать</button>
        </form>
    </div>
</main>
<?php
include 'layouts/footer.php';
?>
</body>
</html>