<?php
require_once 'scripts/database_connection.php';
require_once 'scripts/authorize.php';
require_once 'scripts/authentication.php';
require_once 'scripts/per_page.php';
require_once 'layouts/header.php';

$per_page=3;
per_page($per_page, 'index');
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
<body class="index-page">

<?php
header_view($header_error);
?>

<?php
while ($items = $article->fetch_array()) {
    ///обработка даты
    $items['date'] = date("d M Y", strtotime(trim($items['date'])));
    ///обработка контента новости
    $items['content'] = mb_substr($items['content'], 0, 700);
    $items['content'] = preg_replace("/[\r\n]+/", "</p><p>", trim($items['content']));
    $items['content'] = preg_replace("/$/", "...", trim($items['content']));
    ///обработка вывода изображения
    if (isset($items['art_image_id']) && $items['art_image_id'] != 0) {
        $image_show = "<div class='index-article__image'><img src='/scripts/show_image.php?image_id={$items['art_image_id']}' alt='image'></div>";
    } else {
        unset($image_show);
    }
    $item = <<<ARTICLE
<article class="index-article">
    <div class="_container">
        <div class="index-article__content">
            <div class="index-article__first-line"><h2><a href="article.php?article_id={$items['article_id']}">{$items['heading']}</a></h2>
                <div class="index-article__date">{$items['date']}</div>
            </div>
            <div class="index-article__second-line">
                {$image_show}
                <div class="index-article__text"><p>{$items['content']}</p></div>
            </div>
            <a href="article.php?article_id={$items['article_id']}" class="index-article__link">Читать далее...</a></div>
    </div>
</article>
ARTICLE;
    echo $item;
}
?>

<?php
if ($amount_pages != 1) {
    echo "<ul class='page _container'>";
    for ($page = 1; $page <= $amount_pages; $page++) {
        if ($_GET['page'] == $page) {
            $class = $page;
        } else {
            $class = "<a href='index.php?page={$page}' class='page__link'>{$page}</a>";
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