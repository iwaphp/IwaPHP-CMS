<?php
require '../vendor/autoload.php';
define('ROOT', dirname(__FILE__) .'/');
$auth = \IwaPHP\App::getAuth();
$db = \IwaPHP\App::getDatabase();
$auth->connectFromCookie($db);
include ROOT . 'inc/header.php';
include ROOT . 'inc/navbar.php';
\IwaPHP\App::getAdminPages('admin', 'dashboard');
include ROOT . 'inc/footer.php';
