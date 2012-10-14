<?php

defined('IN_LIBRARY') or exit;

require_once ROOT_PATH . 'View.php';

class BaseView extends \InsuMun\View {


    public function __construct($filename) {
        parent::__construct();

        $this->template_path(ROOT_PATH . 'Form\Templates');
        $this->template_file($filename);
    }

}

?>