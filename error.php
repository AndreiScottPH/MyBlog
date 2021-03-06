<?php
require_once 'scripts/app_config.php';

session_start();
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <title>Мой блог</title>
    <link href="css/main.css" rel="stylesheet">
</head>
<body class="error-page">
<div class="error _container">
    <div class="error__image"><img src="img/error.jpg" alt="error"></div>
    <div class="error__message"><p>На запрашиваемой вами странице возникла ошибка. Попробуйте перезагрузить страницу или зайти позже...</p>
        <p><?= $_SESSION['user_error']; ?></p>
        <?php
        if (DEV) {
            echo "<p>{$_SESSION['dev_error']}</p>";
        }
        ?>
    </div>
</div>
</body>
</html>