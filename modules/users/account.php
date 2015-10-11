<?php
IwaPHP\App::setTitle('Votre compte');
?>
    <h2>Votre compte</h2>

    <p>Bonjour <?= $_SESSION['auth']->username; ?></p>
<ul class="nav nav-pills">
    <li role="presentation" <?= (isset($_GET['onglet']) ? ($_GET['onglet']) == 'profil' ? 'class="active"' : null : 'class="active"') ?>><a href="index.php?page=users&op=account&onglet=profil">Mon profil</a></li>
    <li role="presentation" <?= (isset($_GET['onglet']) ? ($_GET['onglet']) == 'infos' ? 'class="active"' : null : null) ?>><a href="index.php?page=users&op=account&onglet=infos">Mes informations</a></li>
    <li role="presentation" <?= (isset($_GET['onglet']) ? ($_GET['onglet']) == 'friends' ? 'class="active"' : null : null) ?>><a href="index.php?page=users&op=account&onglet=friends">Mes ami(e)s</a></li>
    <li role="presentation" <?= (isset($_GET['onglet']) ? ($_GET['onglet']) == 'inbox' ? 'class="active"' : null : null) ?>><a href="index.php?page=users&op=account&onglet=inbox">Mes messages <span class="badge">4</span></a></li>
</ul>
<?php

if (!isset($_GET['onglet'])) {
    if(file_exists(ROOT . 'modules/users/profil.php')) {
        require ROOT . 'modules/users/profil.php';
    } else {
        IwaPHP\App::notFound();
    }
} else {
    $onglet = (isset($_GET['onglet'])) ? htmlentities($_GET['onglet']) : 'profil';

    if(is_file(ROOT . 'modules/users/' . $onglet . '.php'))  {
        require ROOT . 'modules/users/' . $onglet . '.php';
    } else {
        IwaPHP\App::notFound();
    }
}

