<?php
require_once 'config/config.php';
require_once 'core/app.php';
require_once 'core/controller.php';
require_once 'core/database.php';
// spl_autoload_register(function($class){
//     $class = explode('\\', $class);
//     $class = end($class);

//     require_once __DIR__.'/core/'.$class.'.php';
// });