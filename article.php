<?php
require_once 'scripts/authorize.php';
require_once 'scripts/authentication.php';
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
<body class="article-page">
<?php
header_view($header_error);
?>
<article class="article">
    <div class="_container">
        <div class="article__content"><h1 class="article__heading">The vannishing of Ethan Carter</h1>
            <div class="article__date">24 июля 2020</div>
            <div class="article__image"><img src="img/article_img.jpg" alt="image"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque earum est hic incidunt iure odit quae sit tenetur?
                Aspernatur consectetur iste quis repellat sequi? Accusamus eaque error, illum ipsa minima qui. Ab accusamus asperiores,
                assumenda at autem beatae blanditiis cum cupiditate dolores doloribus dolorum error eveniet expedita facere fugiat harum, id
                illum in laboriosam laborum minus nemo nulla provident quas quia quos ratione recusandae rem repellendus sequi sint soluta
                tempore temporibus totam unde ut voluptatibus. Commodi facere fugiat inventore ipsa iste molestias sapiente veniam. Ad
                asperiores, ducimus est, et expedita explicabo id illo illum magni quas quod rerum sapiente veniam. Alias autem dolor earum
                facilis hic mollitia nesciunt omnis, perspiciatis possimus qui tenetur totam voluptatem voluptatum? Eligendi enim, iste nisi
                officia quasi quisquam tenetur voluptatibus voluptatum! Ab accusamus accusantium ad aliquam architecto at aut blanditiis
                cumque delectus distinctio, doloremque dolores doloribus ducimus eos expedita facere illo illum laboriosam libero magni
                maxime neque nobis nostrum numquam omnis optio pariatur porro possimus quidem quis quisquam ratione rem rerum sapiente sed
                suscipit temporibus. Blanditiis consequatur culpa deleniti dolores, doloribus id libero nemo nesciunt quod sint voluptatibus
                voluptatum! Amet animi aspernatur ducimus eius exercitationem minima veniam! Ab doloribus, non quisquam reiciendis ullam
                voluptates?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eveniet excepturi iste itaque libero omnis perspiciatis
                placeat quaerat qui quo saepe, temporibus veniam voluptatem! Accusamus ad adipisci assumenda aut blanditiis cum, cumque
                dicta ea est excepturi iste libero magni minus nemo nesciunt, officiis optio perferendis perspiciatis quis quod saepe
                tempora temporibus unde voluptate, voluptatibus. Asperiores assumenda commodi, consequatur dolorem enim expedita impedit
                incidunt provident quisquam quos sed similique soluta tempore! Aspernatur dolores earum illum, iste mollitia obcaecati
                ratione sit. Ad dolore optio porro sed. A ab ad alias aspernatur at consequatur deleniti dicta doloremque eligendi, esse ex
                excepturi, facere fugiat fugit harum ipsa laudantium libero obcaecati odit perferendis quam quisquam quo quos rem
                repellendus similique sint suscipit? Aut, consectetur culpa cum debitis earum eius eos ex expedita explicabo fugiat ipsa
                iste maiores maxime nam nostrum officiis pariatur quidem quis quisquam quos rerum saepe similique sint sit soluta velit
                voluptates? Labore?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aliquid animi, at beatae corporis cum cumque dicta dolor
                dolorum ducimus ea esse facilis in iste iusto magnam minima mollitia nam natus nulla optio pariatur provident qui quia
                quisquam recusandae repellendus reprehenderit sequi tempora unde velit veritatis voluptatem! Dignissimos, similique.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam aliquid animi, at beatae corporis cum cumque dicta dolor
                dolorum ducimus ea esse facilis in iste iusto magnam minima mollitia nam natus nulla optio pariatur provident qui quia
                quisquam recusandae repellendus reprehenderit sequi tempora unde velit veritatis voluptatem! Dignissimos, similique.
            </p>
            <a href="index.php" class="article__link">На главную</a>
        </div>
    </div>
</article>

<?php
include 'layouts/footer.php';
?>

</body>
</html>