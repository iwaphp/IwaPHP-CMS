<?php
require 'vendor/autoload.php';
define('ROOT', dirname(__FILE__) .'/');
$auth = \IwaPHP\App::getAuth();
$db = \IwaPHP\App::getDatabase();
$auth->connectFromCookie($db);
ob_start();
\IwaPHP\App::getPages('page', 'home', 'home');
\IwaPHP\Template::getTemplate($db, '/index.template.php', ob_get_clean());
