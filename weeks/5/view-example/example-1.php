<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

//option1
//define('ROOT_PATH', realpath('./'). './');

//option2
define('ROOT_PATH',dirname(__FILE__) . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'View.php';

$view = new \InsuMun\View(ROOT_PATH . 'templates' . DIRECTORY_SEPARATOR . 'example-1.tmpl.php');


$view->set('my_string', 'Here is a string to use in your view file.');

$std_object = new stdClass();
$std_object->example = 'Here is an example.';

$view->set('my_object', $std_object);
$view->set('my_array', array(1,2, 3,4,5));

$contenta = $view->render(false);
print $contenta;



?>