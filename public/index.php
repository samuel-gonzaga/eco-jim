<?php

session_start();

require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/controllers/Controller.php';
//require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/router.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

route($url, $db);
