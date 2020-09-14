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
<body class="index-page">

<?php
header_view($header_error);
?>

<article class="index-article">
    <div class="_container">
        <div class="index-article__content">
            <div class="index-article__first-line"><h2><a href="article.php">The vannishing of Ethan Carter</a></h2>
                <div class="index-article__date">24 июля 2020</div>
            </div>
            <div class="index-article__second-line">
                <div class="index-article__image"><img src="img/article_img.jpg" alt="image"></div>
                <div class="index-article__text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore
                    dolorem ea excepturi id illo in itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod
                    sapiente similique veniam vitae! Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi,
                    aperiam at commodi consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo
                    numquam obcaecati officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero.
                    Consequatur error impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos
                    recusandae reprehenderit sequi, sit tempore tenetur veniam voluptas?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore dolorem ea excepturi id illo in
                        itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod sapiente similique veniam vitae!
                        Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi, aperiam at commodi
                        consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo numquam obcaecati
                        officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero. Consequatur error
                        impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos recusandae
                        reprehenderit sequi, sit tempore tenetur veniam voluptas?</p></div>
            </div>
            <a href="article.php" class="index-article__link">Читать далее...</a></div>
    </div>
</article>
<article class="index-article">
    <div class="_container">
        <div class="index-article__content">
            <div class="index-article__first-line"><h2><a href="article.php">The vannishing of Ethan Carter</a></h2>
                <div class="index-article__date">24 июля 2020</div>
            </div>
            <div class="index-article__second-line">
                <div class="index-article__image"><img src="img/article_img.jpg" alt="image"></div>
                <div class="index-article__text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore
                    dolorem ea excepturi id illo in itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod
                    sapiente similique veniam vitae! Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi,
                    aperiam at commodi consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo
                    numquam obcaecati officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero.
                    Consequatur error impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos
                    recusandae reprehenderit sequi, sit tempore tenetur veniam voluptas?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore dolorem ea excepturi id illo in
                        itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod sapiente similique veniam vitae!
                        Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi, aperiam at commodi
                        consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo numquam obcaecati
                        officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero. Consequatur error
                        impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos recusandae
                        reprehenderit sequi, sit tempore tenetur veniam voluptas?</p></div>
            </div>
            <a href="article.php" class="index-article__link">Читать далее...</a></div>
    </div>
</article>
<article class="index-article">
    <div class="_container">
        <div class="index-article__content">
            <div class="index-article__first-line"><h2><a href="article.php">The vannishing of Ethan Carter</a></h2>
                <div class="index-article__date">24 июля 2020</div>
            </div>
            <div class="index-article__second-line">
                <div class="index-article__image"><img src="img/article_img.jpg" alt="image"></div>
                <div class="index-article__text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore
                    dolorem ea excepturi id illo in itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod
                    sapiente similique veniam vitae! Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi,
                    aperiam at commodi consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo
                    numquam obcaecati officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero.
                    Consequatur error impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos
                    recusandae reprehenderit sequi, sit tempore tenetur veniam voluptas?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore dolorem ea excepturi id illo in
                        itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod sapiente similique veniam vitae!
                        Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi, aperiam at commodi
                        consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo numquam obcaecati
                        officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero. Consequatur error
                        impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos recusandae
                        reprehenderit sequi, sit tempore tenetur veniam voluptas?</p></div>
            </div>
            <a href="article.php" class="index-article__link">Читать далее...</a></div>
    </div>
</article>
<article class="index-article">
    <div class="_container">
        <div class="index-article__content">
            <div class="index-article__first-line"><h2><a href="article.php">The vannishing of Ethan Carter</a></h2>
                <div class="index-article__date">24 июля 2020</div>
            </div>
            <div class="index-article__second-line">
                <div class="index-article__image"><img src="img/article_img.jpg" alt="image"></div>
                <div class="index-article__text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore
                    dolorem ea excepturi id illo in itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod
                    sapiente similique veniam vitae! Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi,
                    aperiam at commodi consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo
                    numquam obcaecati officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero.
                    Consequatur error impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos
                    recusandae reprehenderit sequi, sit tempore tenetur veniam voluptas?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias, aliquid dolore dolorem ea excepturi id illo in
                        itaque iure labore magnam molestiae nobis odit, praesentium quae quas quasi quod sapiente similique veniam vitae!
                        Adipisci architecto excepturi placeat possimus ratione saepe suscipit vitae! A animi, aperiam at commodi
                        consequuntur culpa delectus dicta ea eius enim expedita ipsa ipsum minima molestiae mollitia nemo numquam obcaecati
                        officiis, placeat, quaerat ratione rem reprehenderit repudiandae sequi similique tenetur vel vero. Consequatur error
                        impedit libero maxime neque! Corporis, deserunt harum ipsum maiores molestias provident, quis quos recusandae
                        reprehenderit sequi, sit tempore tenetur veniam voluptas?</p></div>
            </div>
            <a href="article.php" class="index-article__link">Читать далее...</a></div>
    </div>
</article>
<ul class="page _container">
    <li class="page__item"><a href="#" class="page__link">1</a>,</li>
    <li class="page__item"><a href="#" class="page__link">2</a></li>
</ul>

<?php
include 'layouts/footer.php';
?>

</body>
</html>