<?php
$auth = \IwaPHP\App::getAuth();
$db = \IwaPHP\App::getDatabase();
$auth->connectFromCookie($db); # Si il y'a un cookie on connecte à partir de celui ci

if (!isset($_GET['op'])) {
    if (isset($_SESSION['auth'])) {
        if(file_exists(ROOT . 'modules/users/account.php')) {
            require ROOT . 'modules/users/account.php';
        } else {
            require ROOT . 'modules/users/login.php';
        }
    }

} else {
    $op = (isset($_GET['op'])) ? htmlentities($_GET['op']) : 'home';

    if(is_file(ROOT . 'modules/users/' . $op . '.php'))  {
        require ROOT . 'modules/users/' . $op . '.php';
    } else {
        IwaPHP\App::notFound();
    }
}