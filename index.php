<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rully Ramanda
 * Date: 06/06/13
 * Time: 16:16
 */

//ganti ini sesuai folder dimana aplikasi berada
define('BASE_URL', '/test/TwigCrud/');

//include core library
require_once 'incs/twig_init.php';
require_once 'incs/db.php';
require_once 'incs/autoloader.php';
require_once 'incs/dispatcher.php';

$dispatcher = new Dispatcher; // dispatcher nih
$controller = $dispatcher->controller ? $dispatcher->controller : 'index';
$action = $dispatcher->action ? $dispatcher->action : 'index';

$path = "controllers/{$controller}.php";
if(is_readable($path)) require $path; else echo 'Not Found';