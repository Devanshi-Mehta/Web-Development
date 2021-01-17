<?php

session_start();

// Config file
require_once 'config.php';

require_once 'helpers/system_helper.php';

//Autoloader

function __autoload($class_name){
require_once 'hospitalfinder/'.$class_name. '.php';
}
