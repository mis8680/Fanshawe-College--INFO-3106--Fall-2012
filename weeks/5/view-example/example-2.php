<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

define('IN_EXAMPLE', true);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__FILE__) . DS);



require_once ROOT_PATH . 'MyView.php';



$view = new MyView();


print $view;


?>