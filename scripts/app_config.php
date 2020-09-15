<?php
error_reporting(0);

define("HOST", "127.0.0.1");
define("USER", "root");
define("PASSWORD", "root");
define("DATABASE", "myblog");
define("DEV", true);

//define("HOST", "localhost");
//define("USER", "f0470340");
//define("PASSWORD", "irbecanaim");
//define("DATABASE", "f0470340_myblog");
//define("DEV", false);


function handle_error($user_error, $dev_error)
{
    session_start();
    $_SESSION['user_error'] = $user_error;
    $_SESSION['dev_error'] = $dev_error;
    header("Location:/error.php");
    exit();
}