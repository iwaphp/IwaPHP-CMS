<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <?php

        if(isset($_GET['admin'])) {
            echo ($_GET['admin'] == null ? '<li class="active"><a href="index.php">Tableau de bord <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php">Tableau de bord</a></li>');

            echo (($_GET['admin']) == 'theme' ? '<li class="active"><a href="index.php?admin=theme">Apparence <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php?admin=theme">Apparence</a></li>');

            echo (($_GET['admin']) == 'modules' ? '<li class="active"><a href="index.php?admin=modules">Modules/Plugins <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php?admin=modules">Modules/Plugins</a></li>');

            echo (($_GET['admin']) == 'users' ? '<li class="active"><a href="index.php?admin=users">Utilisateurs <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php?admin=users">Utilisateurs</a></li>');

            echo (($_GET['admin']) == 'auth' ? '<li class="active"><a href="index.php?admin=auth">Droits/Permissions <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php?admin=auth">Droits/Permissions</a></li>');

            echo (($_GET['admin']) == 'settings' ? '<li class="active"><a href="index.php?admin=settings">Paramètres <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php?admin=settings">Paramètres</a></li>');
        } else {
           echo '<li class="active"><a href="index.php">Tableau de bord <span class="sr-only">(current)</span></a></li>
                 <li><a href="index.php?admin=theme">Apparence</a></li>
                 <li><a href="index.php?admin=modules">Modules/Plugins</a></li>
                 <li><a href="index.php?admin=users">Utilisateurs</a></li>
                 <li><a href="index.php?admin=auth">Droits/Permissions</a></li>
                 <li><a href="index.php?admin=settings">Paramètres</a></li>';
        }




        ?>
    </ul>
    <h4>Page d'accueil</h4>
    <ul class="nav nav-sidebar">
        <?php
        if(isset($_GET['admin'])) {
            echo (($_GET['admin']) == 'home' ? '<li class="active"><a href="index.php?admin=home">Articles/News <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php?admin=home">Articles/News</a></li>');

            echo (($_GET['admin']) == 'category' ? '<li class="active"><a href="index.php?admin=category">Catégories <span class="sr-only">(current)</span></a></li>'
                : '<li><a href="index.php?admin=category">Catégories</a></li>');
        } else {
            echo '<li><a href="index.php?admin=home">Articles/News</a></li>
                  <li><a href="index.php?admin=category">Catégories</a></li>';
        }

        ?>
    </ul>

</div>