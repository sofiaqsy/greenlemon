<?php

// Variables predefinidas para el aplicativo
define('_BASE_URL_', 'http://' . $_SERVER['HTTP_HOST'] . '/greenlemon/');
define('_BASE_FOLDER_', str_replace('index.php', '', __FILE__));
define('_DEFAULT_CONTROLLER_', 'Inicio');
define('_DB_CONNECTION_STRING_', 'mysql:host=127.0.0.1;dbname=greenlemon|root|');

// Cargamos el core de nuestro aplicativo
require_once 'core/errorcontroller.php';
require_once 'core/frontcontroller.php';
require_once 'core/controller.php';
require_once 'core/dataaccesslayer.php';

// Cargamos algunos helper por defecto
require_once 'helper/responsehelper.php';
require_once 'helper/basehelper.php';
require_once 'helper/formhelper.php';

// Creamos una instancia de nuestro FrontController
new FrontController();
