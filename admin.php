<?php
require_once 'layouts/header.php';
session_start();
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
        <tr>
            <td>1</td>
            <td>24 июля 2020</td>
            <td><a href="article.php" class="table-admin__article-heading">The vannishing of Ethan Carter</a></td>
            <td><a href="#" class="table-admin__remove">удалить</a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>24 июля 2020</td>
            <td><a href="article.php" class="table-admin__article-heading">The vannishing of Ethan Carter</a></td>
            <td><a href="#" class="table-admin__remove">удалить</a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>24 июля 2020</td>
            <td><a href="article.php" class="table-admin__article-heading">The vannishing of Ethan Carter</a></td>
            <td><a href="#" class="table-admin__remove">удалить</a></td>
        </tr>
        </tbody>
    </table>
</div>
<ul class="page _container">
    <li class="page__item"><a href="#" class="page__link">1</a>,</li>
    <li class="page__item"><a href="#" class="page__link">2</a></li>
</ul>
<footer class="footer">
    <div class="footer__content">Copiright 2020 Blog. All rights reserved.</div>
</footer>
<script src="main.js"></script>
</body>
</html>