<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);


define('IN_LIBRARY', true);
define('LIBRARY_ROOT_PATH', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('LIBRARY_PHPEXT', '.php');

if (!defined('LIBRARY_IGNORE_AUTOLOAD')) {
    include_once LIBRARY_ROOT_PATH . 'SplLoader' . LIBRARY_PHPEXT;
    $autoloader = new SplLoader(
                    DIRECTORY_SEPARATOR,
                    LIBRARY_PHPEXT,
                    '\\',
                    array(LIBRARY_ROOT_PATH)
    );

    print '---Autoloader instance created.---';
    print BR;
    $autoloader->register();
    print '--registered--';
}
?>