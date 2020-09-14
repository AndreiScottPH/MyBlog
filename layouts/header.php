<?php
function header_view($header_error = NUll)
{
    session_start();
    if ($_SESSION['admin']) {
        $admin = <<<ADM
<li class="nav-header__item nav-header__admin"><a href="/admin.php" class="nav-header__link">Администрирование</a></li>
ADM;
    }

    if (isset($_SESSION['user_id'])) {
        $nav = '';
        $user = 'disable';
    } else {
        $nav = 'disable';
        $user = '';
    }
    echo <<<HEADER
<header class="header">
    <div class="header__content _container">
        <div class="header__logo"><a href="index.php"><img src="img/logo.png" alt="logo"></a></div>
        
        <nav class="header__nav nav-header {$nav}">
            <ul class="nav-header__list">
                <li class="nav-header__item nav-header__index"><a href="index.php" class="nav-header__link">На главную</a></li>
                {$admin}
                <li class="nav-header__item nav-header__out"><a href="/scripts/logout.php" class="nav-header__link">Выход</a></li>
            </ul>
        </nav>
        
        <div class="header__user {$user}">
            <div class="user-header">
                <div class="user-header__message">{$header_error}</div>
                <form action="{$_SERVER['PHP_SELF']}" method="post" class="user-header__form form-header">
                    <label for="username"></label>
                    <input class="form-header__input" id="username" name="username" placeholder="Логин" value="{$_POST['username']}">
                    <label for="password"></label> 
                    <input type="password" class="form-header__input" id="password" name="password" placeholder="Пароль">
                    <button class="form-header__submit" type="submit">войти</button>
                </form>
            </div>
        </div>
        
    </div>
</header>
HEADER;
}

