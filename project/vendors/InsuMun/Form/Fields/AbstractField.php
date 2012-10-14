<?php

    
    class AbstractField extends Object{
        
        private $_form;
        private $_validators = array();
        private $_processors = array();
        private $_is_valid = false;
        private $_has_error = false;
        private $_messages = array();
        private $_label;
        private $_default_value ;
        private $_value;
        private $_processed_value;
        
        public function __construct(Form $form) {
            $this->_form = $form;
        }
        
        public function validate() {
            return false;
        }
        
        public function process() {
            return false;
        }
        
        public function render($val = false) {
             return mixed;
        }
        
        public function label($string = null) {
             return mixed;
        }
        
        public function description($_description = null) {
             return mixed;
        }
        
        public function name($_name = null) { 
             return mixed;
        }
        
        public function id($_id = null) {
             return mixed;
        }
        
        public function type() {
            return mixed;
        }
        
        public function is_required($bool_val = null) {
             return mixed;
        }
    }
    

?>