<?php
require 'config.php';
require 'router.php';

session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();
date_default_timezone_set('America/Sao_Paulo');

spl_autoload_register(function($class){
    if(file_exists('app/controllers/'.$class.'.php')){
        require 'app/controllers/'.$class.'.php';
    }else if(file_exists('app/models/'.$class.'.php')){
        require 'app/models/'.$class.'.php';
    }else if(file_exists('app/core/'.$class.'.php')){
        require 'app/core/'.$class.'.php';
    }
});

$core = new Core;
$core->run();


?>