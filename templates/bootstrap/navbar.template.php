<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><?= \IwaPHP\App::getNameSite(); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Accueil</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['auth'])): ?>
                    <li><a href="admin/">Administration</a> </li>
                    <li><a href="index.php?page=users&op=account">Mon compte</a> </li>
                    <li><a href="index.php?page=users&op=logout">Se déconnecter [ <strong><?= $_SESSION['auth']->username; ?></strong> ]</a> </li>
                <?php else: ?>
                    <li><a href="index.php?page=users&op=register">S'inscrire</a></li>
                    <li><a href="index.php?page=users&op=login">Se connecter</a></li>
                <?php endif; ?>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>