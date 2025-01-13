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
            require_once __DIR__ . '/../app/views/login.php';
            break;
        case 'register':
            require_once __DIR__ . '/../app/views/register.php';
            break;
        default:
            echo "Página não encontrada!";
            break;
    }
}