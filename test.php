<?php
require_once 'scripts/database_connection.php';


//$login = 'Jess';
//$password = password_hash('qwerty', PASSWORD_BCRYPT);
//$label = '';
//$query = sprintf("INSERT INTO users (login, password, label) VALUE ('%s','%s','%s')", $login, $password, $label);
//$mysqli->query($query);

$username = $_POST['username'];
$password = $_POST['password'];
$query = sprintf("SELECT user_id, password FROM users WHERE login = '%s'", $username);
$result = $mysqli->query($query);
if ($result->num_rows == 1) {
    $result = $result->fetch_array();
    if (password_verify($password, $result['password'])) {
        var_dump($result);
    }
}