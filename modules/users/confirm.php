<?php
$db = \IwaPHP\App::getDatabase();

if(\IwaPHP\App::getAuth()->confirm($db, $_GET['id'], $_GET['token'], \IwaPHP\Session::getInstance())) {
    \IwaPHP\Session::getInstance()->setFlash('success', 'Votre compte a bien été validé');
    \IwaPHP\App::redirect('index.php?page=users&op=account');
}else{
    \IwaPHP\Session::getInstance()->setFlash('danger', "Ce token n'est plus valide");
    \IwaPHP\App::redirect('index.php?page=users&op=login');
}

IwaPHP\App::setTitle('Confirmation');
