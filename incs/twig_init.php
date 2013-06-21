<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rully Ramanda
 * Date: 07/06/13
 * Time: 14:42
 */

require_once 'lib/Twig/Autoloader.php';

//daftarkan autoloader Twig
Twig_Autoloader::register();

//definisikan lokasi template berada
$loader = new Twig_Loader_Filesystem('templates');

//Twig object dibuat
$twig = new Twig_Environment($loader, array(
    //'debug'=>true,
    'cache'=>'twig_cache', // lokasi penyimpanan cache untuk Twig
    'auto_reload'=>true, // auto reload jika template dimodifikasi
));

$twig->addGlobal('base_url', BASE_URL);

$url_func = new Twig_SimpleFunction('url', function($route){
    return BASE_URL.$route;
});
$twig->addFunction($url_func);


/**
 * @param $name (nama template yang mau di load)
 * @param array $data (data yang mau dipassing ke template)
 *
 * Fungsi untuk me-render template ke browser
 */
function render($name, array $data){
    global $twig;
    $template = $twig->loadTemplate($name);
    $template->display($data);
}