<?php
class Route extends Model
{
    function route($url)
    {
        switch ($url) {
            case 'home':
                $cards = new HomeController($this->db);
                $cards->getTurmas();
                $cards->showHome();
                $cards->createClass($_POST);
                break;
            case 'about':
                require_once __DIR__ . '/../app/views/about.php';
                break;
            case 'login':
                $login = new LoginController($this->db);
                $errors = $login->validarLogin($_POST);
                require_once __DIR__ . '/../app/views/login.php';
                break;
            case 'register':
                $register = new RegisterController($this->db);
                $errors = $register->validarRegistro($_POST);
                require_once __DIR__ . '/../app/views/register.php';
                break;
            case 'logout':
                $logout = new LogoutController($this->db);
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
}
$url = isset($_GET['url']) ? $_GET['url'] : 'home';

$router = new Route($url);
$router->route($url);
