<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['admin']);
header("Location:" . $_SERVER['HTTP_REFERER']);
exit();