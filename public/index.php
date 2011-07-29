<?php

define('DS', DIRECTORY_SEPARATOR); 
define('PS', PATH_SEPARATOR);
define ('ROOT_PATH', dirname(dirname(__FILE__))); 
define ('LIBRARY_PATH', ROOT_PATH . DS . 'library'); 

set_include_path('/usr/local/zend/share/ZendFramework/library' . PS . LIBRARY_PATH); 

require_once ('Zend/Application.php');
$application = new Zend_Application(); 