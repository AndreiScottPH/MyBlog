<?php
require_once 'scripts/database_connection.php';
require_once 'scripts/authorize.php';
require_once 'scripts/authentication.php';
require_once 'layouts/header.php';
session_start();

$articles_query = sprintf("SELECT article_id, date, heading FROM articles");
$articles = $mysqli->query($articles_query);
$count = $articles->num_rows;
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
<body class="admin-page">

<?php
header_view();
?>
<div class="_container">
    <a href="add-article.php" class="link-add-article">Создать новость</a>
    <div class="add-article__message"><?= $_GET['message']; ?></div>
    <table class="admin__table table-admin">
        <caption class="table-admin__caption"><h2>Список новостей</h2></caption>
        <thead class="table-admin__head">
        <tr>
            <th>№</th>
            <th>Дата</th>
            <th>Заголовок</th>
            <th></th>
        </tr>
        </thead>
        <tbody class="table-admin__body">
        <?php
        $number = 1;
        while ($article = $articles->fetch_array()) {
            $table_row = sprintf("<tr><td>%d</td><td>%s</td>" .
                "<td><a href='article.php?article_id=%s' class='table-admin__article-heading'>%s</a></td>" .
                "<td><a href='#' class='table-admin__remove'>удалить</a></td></tr>",
                $number++, $article['date'], $article['article_id'], $article['heading']);
            echo $table_row;
        }
        ?>
        </tbody>
    </table>
</div>
<ul class="page _container">
    <li class="page__item"><a href="#" class="page__link">1</a>,</li>
    <li class="page__item"><a href="#" class="page__link">2</a></li>
</ul>
<?php
include 'layouts/footer.php';
?>
</body>
</html>