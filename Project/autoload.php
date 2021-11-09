<?php

    spl_autoload_register(function($className){
        require_once(dirname(__FILE__).'/api/'.$className.'.php');
    });

?>