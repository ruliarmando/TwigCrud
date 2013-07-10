<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rully Ramanda
 * Date: 09/06/13
 * Time: 8:27
 */

class autoloader{

    public static function modelautoloader($class){ // autoload untuk model
        $path = __DIR__."models/{$class}.php";
        if(is_readable($path)) require_once $path;
    }
}

spl_autoload_register('autoloader::modelautoloader');