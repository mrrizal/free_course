<?php

define('DS', DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', __DIR__ . DS . '..' . DS . 'Controller' . DS);
define('VIEW_PATH', __DIR__ . DS . '..' . DS . 'View' . DS);
define('MODEL_PATH', __DIR__ . DS . '..' . DS . 'Model' . DS);
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/mvc_psr4/public_html/') ;