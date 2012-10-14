<?php
namespace InsuMun\Form
{
    defined('IN_LIBRARY') or exit;
    
    class View extends \InsuMun\View
    {
        public function __construct($finename)
        {
            parent::__construct();
            
            $this->template_path( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Templates' );
            $this->template_file($filename);
            
            
        }
    }
    
}
?>