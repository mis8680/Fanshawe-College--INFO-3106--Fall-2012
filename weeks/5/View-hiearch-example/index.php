<?php

define('IN_EXAMPLE', true);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__FILE__) . DS);

require_once ROOT_PATH . 'ElementView.php';

$element = new ElementView('p');
$element->attrs(array(
	'id' => 'first',
	'style' => 'padding: 10px 10px; background: #eee;')
)->inner('Here is my paragraph! Yay');

$element2 = new ElementView('input');
$element2->attrs(array(
	'type' => 'button',
	'value' => 'Click')
);


print $element;
print $element2;