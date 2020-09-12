<?php
require_once 'scripts/database_connection.php';


//$login = 'Jess';
//$password = password_hash('qwerty', PASSWORD_BCRYPT);
//$label = '';
//$query = sprintf("INSERT INTO users (login, password, label) VALUE ('%s','%s','%s')", $login, $password, $label);
//$mysqli->query($query);

session_start();
var_dump($_SESSION['user_id']);
$query = sprintf("SELECT label FROM users WHERE user_id = '%s'", $_SESSION['user_id']);
$result = $mysqli->query($query);
$result = $result->fetch_array();
var_dump($result);
if (isset($result['label']) && strlen($result['label'])>0) {
    var_dump($result);
}