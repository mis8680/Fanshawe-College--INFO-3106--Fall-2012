<?php

define('IN_APPLICATION', true);
require_once 'bootstrap.php';

print 'Hello World from Shapes<br />';

$square = new Square(array(10,10,10,10));


print $square . '<br />';
foreach( $square->getDimensions() as $side_length ) {
  print $side_length . '<br />';
}


$triangle = new Triangle(array (5,6,15));

print $triangle . '<br />';
foreach( $triangle->getDimensions() as $side_length2 ) {
 print $side_length2 . '<br />';
}

// $pentagon = new Pentagon();
// $triangle = new Triangle();
// print $pentagon . '<br />';
// print $triangle . '<br />';