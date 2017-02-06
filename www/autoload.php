<?php

function __autoload($class)
{
    if (file_exists(__DIR__.'/controllers/'.$class.'.php')){
        require_once __DIR__.'/controllers/'.$class.'.php';
    }elseif(file_exists(__DIR__.'/model/'.$class.'.php')){
        require_once __DIR__.'/model/'.$class.'.php';
    } elseif (file_exists(__DIR__.'/classes/'.$class.'.php')){
        require_once __DIR__.'/classes/'.$class.'.php';
    }
}