<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Rully Ramanda
 * Date: 07/06/13
 * Time: 14:34
 */

require_once 'lib/Idiorm_Paris/idiorm.php';
require_once 'lib/Idiorm_Paris/paris.php';

//ingat, kita pake PDO!
$dsn = 'mysql:host=localhost;dbname=slim_blog';
$user = 'root';
$password = '';

//konfigurasi database yang digunakan oleh Idiorm ORM
ORM::configure($dsn);
ORM::configure('username', $user);
ORM::configure('password', $password);


