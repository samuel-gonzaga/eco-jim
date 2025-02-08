<?php

session_start();

require_once __DIR__ . '/app/config/config.php';
require_once __DIR__ . '/app/helpers/session.php';

require_once __DIR__ . '/app/controllers/Controller.php';
require_once __DIR__ . '/app/controllers/RegisterController.php';
require_once __DIR__ . '/app/controllers/LoginController.php';
require_once __DIR__ . '/app/controllers/LogoutController.php';
require_once __DIR__ . '/app/controllers/HomeController.php';
require_once __DIR__ . '/app/controllers/CreateClassController.php';

require_once __DIR__ . '/app/models/User.php';
require_once __DIR__ . '/app/models/Turmas.php';
require_once __DIR__ . '/app/models/Model.php';
require_once __DIR__ . '/app/models/Validator.php';


require_once __DIR__ . '/app/router.php';

