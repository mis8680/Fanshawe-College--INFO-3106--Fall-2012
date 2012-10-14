<?php

defined('IN_EXAMPLE') or exit;

require_once ROOT_PATH . 'View.php';

/* option 2: to add variables that are available to all views can be done via the set_global methods. These variables are stored within a static colloection */
\InsuMun\View::set_global(
        array(
           'var1' => 'Here is my var',
            'var2' => 'Here is my second variable',
            'var3' => 'Here is my third variable'
            
        ));

class BaseView extends \InsuMun\View {
    
    public function __construct($filename){
        parent::__construct();
        
        $this->template_path(ROOT_PATH . 'templates');
        $this->template_file($filename);
        /* option 1 : to add varialbes avilable to all views can be done via a base view class like this that your view class are derived from */
        /*
        $this->set(array(
           'var1' => 'Here is my var',
            'var2' => 'Here is my second variable',
            'var3' => 'Here is my third variable'
            
        ));
         * 
         */
        
    }
}

?>