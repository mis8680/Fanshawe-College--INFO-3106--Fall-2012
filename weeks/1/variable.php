<?php
	
	define('LNBREAK_HTML', '<br /><br />');
	
	$hello_world = 'Hello World';
	
	print $hello_world;
	
	print LNBREAK_HTML;
	
	$hello = 'hello';
	$world = 'world';
	
	print $hello . ' ' . $world;
	
	print LNBREAK_HTML;
	
	print "{$hello} {$world}";

	print LNBREAK_HTML;	
	
	for( $i = 0; $i <10; ++$i)
	{
		print $i . LNBREAK_HTML; 
	}
	
	?>