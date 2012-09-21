<?php

defined('IN_APPLICATION') or exit;

require_once 'Shape.php';

class Triangle extends Shape {
  public function getName() {
    return 'Triangle';
  }
  
  public function getNumberOfSides() {
    return 3;
  }
  
  public function setDimensions(array $dimensions)
  {
	$dimensions_count = count($dimensions);
    
    if( 0 == $dimensions_count ) {
      throw new Exception('Cannot have empty array of dimensions when setting.');
    }
	
	if( 1 === $dimensions_count ) {
      $this->_dimensions = array();
      for( $i = 0; $i < $this->getNumberOfDimensions(); ++$i ) {
        $this->_dimensions[] = $dimensions[0];
      }
    }
	
	else if ( 3 === $dimensions_count) {
		if( ($dimensions[0] <  ($dimensions[1] + $dimensions[2]))
			&& ($dimensions[1] <  ($dimensions[0] + $dimensions[2]))
				&& ($dimensions[2] <  ($dimensions[1] + $dimensions[0]))
		){
			$this->_dimensions = $dimensions;
		}
		else{
			throw new Exception('This is not a TRIANGLE');
		}
		
		
	}
	
	else {
      throw new Exception('You must specify one or all three side dimensions of the triangle.');
    }
  }
  
}


?>