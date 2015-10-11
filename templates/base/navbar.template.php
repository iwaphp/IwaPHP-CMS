<div class="mainmenu-wrapper">
	        <div class="container">

		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="templates/base/img/innovation.png" alt="<?= \IwaPHP\App::getNameSite(); ?>"><?= \IwaPHP\App::getNameSite() ?></a></li>
						<?php
                             echo (!isset($_GET['page']) ? '<li class="active"><a href="index.php">Accueil</a></li>' :
                            '<li><a href="index.php">Accueil</a></li>');

                        ?>



                        <?php if (isset($_SESSION['auth'])): ?>

                               <?php echo (isset($_GET['page']) ? ($_GET['page'] == 'users') ? '<li class="has-submenu active"><a href="#">Mon compte</a>' :
                                          '<li class="has-submenu"><a href="#">Mon compte</a>' : '<li class="has-submenu"><a href="#">Mon compte</a>'); ?>

                                <div class="mainmenu-submenu">
                                    <div class="mainmenu-submenu-inner">
                                        <div>
                                            <h4>Mon compte</h4>
                                            <ul>
                                                <li><a href="index.php?page=users&op=account&onglet=profil">Mon profil</a></li>
                                                <li><a href="index.php?page=users&op=account&onglet=infos">Mes informations</a></li>
                                                <li><a href="index.php?page=users&op=account&onglet=friends">Mes ami(e)s</a></li>
                                                <li><a href="index.php?page=users&op=account&onglet=inbox">Mes messages</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- /mainmenu-submenu-inner -->
                                </div><!-- /mainmenu-submenu -->
                            </li>

                            <li class="has-submenu">
                                <a href="#">Administration</a>
                                <div class="mainmenu-submenu">
                                    <div class="mainmenu-submenu-inner">
                                        <div>
                                            <h4>Administration</h4>
                                            <ul>
                                                <li><a href="admin/index.php">Tableau de bord</a></li>
                                                <li><a href="admin/index.php?admin=theme">Apparence</a></li>
                                                <li><a href="admin/index.php?admin=modules">Modules/Plugins</a></li>
                                                <li><a href="admin/index.php?admin=users">Utilisateurs</a></li>
                                                <li><a href="admin/index.php?admin=auth">Droits/Permissions</a></li>
                                                <li><a href="admin/index.php?admin=settings">Paramètres</a></li>
                                                <li><a href="admin/index.php?admin=home">Articles/News</a></li>
                                                <li><a href="admin/index.php?admin=category">Catégories</a></li>
                                            </ul>

                                            <h4>Modules/Plugins</h4>
                                        </div>
                                    </div><!-- /mainmenu-submenu-inner -->
                                </div><!-- /mainmenu-submenu -->
                            </li>
                            <li><a href="index.php?page=users&op=logout">Se déconnecter [ <strong><?= $_SESSION['auth']->username; ?></strong> ]</a> </li>
                        <?php else: ?>
                            <?php echo (isset($_GET['op']) ? ($_GET['op'] == 'register') ?
                             '<li class="active"><a href="index.php?page=users&op=register">S\'inscrire</a>' :
                             '<li><a href="index.php?page=users&op=register">S\'inscrire</a>' :
                             '<li><a href="index.php?page=users&op=register">S\'inscrire</a>'); ?>
                           <?php echo (isset($_GET['op']) ? ($_GET['op'] == 'login') ?
                             '<li class="active"><a href="index.php?page=users&op=login">Se connecter</a>' :
                             '<li><a href="index.php?page=users&op=login">Se connecter</a>' :
                             '<li><a href="index.php?page=users&op=login">Se connecter</a>'); ?>

                        <?php endif; ?>
</ul>
</nav>
</div>
</div>