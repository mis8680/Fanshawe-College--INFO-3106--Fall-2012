<?php
    
    class Label extends Object{
        
        private $_field;
        private $_text;
        private $_description;
        private $_view;
        
        public function __construct(AbstractFiled $abstractField) {
            $this->_field = $abstractField;
        }
        
        public function update() {
            
        }
        
        public function render($val = false) {
            return "<label for=\"$this->$_description\" />";
        }
        
        public function toString() {
            return '';
        }
    }


?>