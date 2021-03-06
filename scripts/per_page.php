<?php
require_once 'database_connection.php';

function per_page($per_page, $query_number=NULL)
{
    global $mysqli;
    global $article;
    global $amount_pages;

    $num_articles = $mysqli->query("SELECT COUNT(*) FROM articles");
    $num_articles = $num_articles->fetch_row();
    $num_articles = $num_articles[0];

    $amount_pages = ceil($num_articles / $per_page);

    if (!isset($_GET['page'])) {
        $_GET['page'] = 1;
    }
    $amount_in_page = ($_GET['page'] - 1) * $per_page;


    if ($query_number == 'admin') {
        $query = sprintf("SELECT article_id, date, heading FROM articles ORDER BY date DESC LIMIT %d, %d", $amount_in_page, $per_page);
        $article = $mysqli->query($query);
    }
    if ($query_number == 'index') {
        $query = sprintf("SELECT article_id, date, heading, content, art_image_id FROM articles ORDER BY date DESC LIMIT %d, %d",
            $amount_in_page, $per_page);
        $article = $mysqli->query($query);
    }
}

function per_page_link($link){
    global $amount_pages;
    if ($amount_pages != 1) {
        echo "<ul class='page _container'>";
        for ($page = 1; $page <= $amount_pages; $page++) {
            if ($_GET['page'] == $page) {
                $class = $page;
            } else {
                $class = "<a href='{$link}.php?page={$page}' class='page__link'>{$page}</a>";
            }
            echo "<li class='page__item user-header__message'>{$class}</li>";
        }
        echo "</ul>";
    }
}
