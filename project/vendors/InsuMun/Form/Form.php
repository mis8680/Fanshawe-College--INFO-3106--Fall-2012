<?php


namespace InsuMun\Form {
    
    /*
     * @ignore
     */
    defined('IN_LIBRARY') or exit;
    
    /*
     * 
     */
    require_once '../BaseView.php';


    class Form extends \InsuMun\Object{

        private $_fields = array();
        private $_processed_fields = array();
        private $_messages = array();
        private $_is_valid = false;
        private $_is_processed = false;
        private $_event_handlers;

        public static function factory(/*auguments to be placed here, sep'ed by comma */) {
            $form = new self();
            /*
             * Do any initializing required with any arguments that your library specifies in this method signature
             */
            return $form;
        }
        
        protected $_view;


        public function __construct(/* augunemts here as well if you so wish */) {
            /* Do any initializing required */
            $this->_view = new FromView();
        }

        public function attachField(AbstractField $_field) {
            
        }

        public function detachField(AbstractField $_field) {
            
        }

        public function detachFieldByName($value) {
            
        }

        public function render() {
            return '';
        }
        
        public function attachEventHandler(FormEventHandler $formevent) {
            
        }
        
        public function detachEventHandler(FormEventHandler $formevent) {
            
        }
        
        protected function fireEvent($var) {
            
        }
        
        protected function process() {
            
        }
    }

}

?>