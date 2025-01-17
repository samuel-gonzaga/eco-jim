<?php

function route($url, $db)
{
    switch ($url) {
        case 'home':
            require_once __DIR__ . '/../app/views/home.php';
            break;
        case 'about':
            require_once __DIR__ . '/../app/views/about.php';
            break;
        case 'login':
            $login = new LoginController($db);
            $err = $login->validarLogin($_POST);
            require_once __DIR__ . '/../app/views/login.php';
            break;
        case 'register':
            $register = new RegisterController($db);
            $err = $register->validarRegistro($_POST);
            require_once __DIR__ . '/../app/views/register.php';
            break;
        case 'logout':
            $logout = new LogoutController($db);
            $logout->logout();
            break;
        case 'dashboard':
            require_once __DIR__ . '/../app/views/dashboard.php';
            break;
        default:
            echo "Página não encontrada!";
            break;
    }
}