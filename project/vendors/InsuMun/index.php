<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__FILE__) . DS);
define('VIEW_PATH', ROOT_PATH . 'Forms' . DS . 'Fields');
define('BR','<br /><br />');

include_once '../bootstrap.php';
include_once ROOT_PATH . 'BaseView.php';
include_once VIEW_PATH . DS. 'Fieldview.php';

defined('IN_LIBRARY') or exit;

print BR;
print 'Library path: ' . LIBRARY_ROOT_PATH;

print BR;
print 'Root path: ' . ROOT_PATH;

print BR;

$textarea = new FieldView('textarea');
$textarea->attrs(array(
   'value' => 'textarea' 
));
print $textarea;
print BR;

$radio_array = array();
$radio_array[0] = new FieldView();
$radio_array[0]->attrs(array(
    'type' => 'radio',
    'name' => 'sex',
    'value' => 'male'
    
))->inner('Male');

$radio_array[1] = new FieldView();
$radio_array[1]->attrs(array(
    'type' => 'radio',
    'name' => 'sex',
    'value' => 'female'
    
))->inner('Female');

foreach ( $radio_array as $radio)
{
    print $radio;
}

print BR;

$text = new FieldView();
$text->attrs(array(
    'type' => 'text',
    'length' => '20',
    'name' => 'textBox'
));

print $text;
print BR;

$button = new FieldView();
$button->attrs(array(
    'type' => 'button',
    'value' => 'Click')
);
print $button;


        
?>