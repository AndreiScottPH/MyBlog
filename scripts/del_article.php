<?php
require_once 'database_connection.php';
require_once 'authentication.php';

session_start();

if ($_SESSION['admin']) {
    $article_id = $_REQUEST['article_id'];
    $image_id = $mysqli->query("SELECT art_image_id FROM articles WHERE article_id={$article_id}");
    $image_id = $image_id->fetch_row();
    $mysqli->query("DELETE FROM articles WHERE article_id={$article_id}");
    $mysqli->query("DELETE FROM images WHERE image_id={$image_id[0]}");
    $message = "Статья была удалена.";
    header("Location: /admin.php?message=$message");
    exit();
}