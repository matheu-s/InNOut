<?php

date_default_timezone_set('Europe/Riga');
setlocale('en-US', 'en-US.utf', 'english');

//Folders
define(MODEL_PATH, realpath(dirname(__FILE__) . '/../models'));
define(VIEW_PATH, realpath(dirname(__FILE__) . '/../views'));
define(CONTROLLER_PATH, realpath(dirname(__FILE__) . '/../controllers'));
define(TEMPLATE_PATH, realpath(dirname(__FILE__) . '/../views/templates'));

//Files
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__DIR__) . '/exceptions/AppException.php'));
require_once(realpath(dirname(__DIR__) . '/exceptions/ValidationException.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));

