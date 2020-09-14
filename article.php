<?php
require_once 'scripts/authorize.php';
require_once 'scripts/authentication.php';
require_once 'layouts/header.php';

$article_id = $_REQUEST['article_id'];

$article_query = sprintf("SELECT article_id, date, heading, content, art_image_id FROM articles WHERE article_id=%s", $article_id);
$article = $mysqli->query($article_query);
$article = $article->fetch_array();

$article['date'] = date("d M Y", strtotime(trim($article['date'])));
$article['content'] = preg_replace("/[\r\n]+/", "</p><p>", trim($article['content']));

if (isset($article['art_image_id']) && $article['art_image_id'] != 0) {
    $image_show = "<div class='article__image'><img src='/scripts/show_image.php?image_id={$article['art_image_id']}' alt='image'></div>";
}
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
<body class="article-page">
<?php
header_view($header_error);
?>
<article class="article">
    <div class="_container">
        <div class="article__content"><h1 class="article__heading"><?= $article['heading']; ?></h1>
            <div class="article__date"><?= $article['date']; ?></div>
            <?= $image_show; ?>
            <p><?= $article['content']; ?></p>
            <a href="index.php" class="article__link">На главную</a>
        </div>
    </div>
</article>

<?php
include 'layouts/footer.php';
?>

</body>
</html>