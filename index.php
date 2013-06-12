<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rully Ramanda
 * Date: 06/06/13
 * Time: 16:16
 */

//ganti ini sesuai folder dimana aplikasi berada
define('BASE_URL', '/test/TwigCrud');

require_once 'incs/twig_init.php';
require_once 'incs/db.php';
require_once 'incs/autoloader.php';

if(isset($_SERVER['PATH_INFO'])){
    $r = explode('/', $_SERVER['PATH_INFO']);
}else{
    $r = array();
}

$c = isset($r[1]) && $r[1] ? htmlspecialchars($r[1]) : 'index';
$a = isset($r[2]) && $r[2] ? htmlspecialchars($r[2]) : 'index';

$path = "controllers/{$c}.php";
if(is_readable($path)) require $path; else echo 'Not Found';