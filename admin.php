<?php
require_once 'scripts/database_connection.php';
require_once 'scripts/authentication.php';
require_once 'layouts/header.php';
session_start();
if ($_SESSION['admin']) {
    $num_articles = $mysqli->query("SELECT COUNT(*) FROM articles");
    $num_articles = $num_articles->fetch_row();
    $num_articles = $num_articles[0];

    $per_page = 2;
    $num_pages = ceil($num_articles / $per_page);

    if (isset($_GET['page']) && $_GET['page'] > 0) {
        $num_page = ($_GET['page'] - 1) * $per_page;
    }

    $article_query = sprintf("SELECT article_id, date, heading FROM articles LIMIT %d, %d", $num_page, $per_page);
    $article = $mysqli->query($article_query);
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
        <script>
            function delete_article(article_id) {
                if (confirm("Вы уверены, что хотите удалить эту статью?")) {
                    window.location = "/scripts/del_article.php?article_id=" + article_id;
                }
            }
        </script>
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
            while ($items = $article->fetch_array()) {
                $table_row = sprintf("<tr><td>%d</td><td>%s</td>" .
                    "<td><a href='article.php?article_id=%s' class='table-admin__article-heading'>%s</a></td>" .
                    "<td><a href='javascript:delete_article(%d)' class='table-admin__remove'>удалить</a></td></tr>",
                    $number++, $items['date'], $items['article_id'], $items['heading'], $items['article_id']);
                echo $table_row;
            }
            ?>
            </tbody>
        </table>
    </div>

    <?php
    if ($num_pages != 1) {
        echo "<ul class='page _container'>";
        for ($page = 1; $page <= $num_pages; $page++) {
            if (!isset($_GET['page'])) {
                $_GET['page'] = $page;
            }
            if ($_GET['page'] != $page) {
                $class = "<a href='admin.php?page={$page}' class='page__link'>{$page}</a>";
            } else {
                $class = $page;
            }
            echo "<li class='page__item user-header__message'>{$class}</li>";
        }
        echo "</ul>";
    }
    ?>

    <?php
    include 'layouts/footer.php';
    ?>
    </body>
    </html>

    <?php
} else {
    header("Location:index.php");
    exit();
}