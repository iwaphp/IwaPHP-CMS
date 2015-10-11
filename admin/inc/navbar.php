<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img alt="Brand" src="img/admin.png">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Administration</a>

                <ul class="nav navbar-nav">
                    <li><a href="../index.php">Voir le site</a></li>
                </ul>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Tableau de bord</a></li>
                <li><a href="index.php?admin=settings">Paramètres</a></li>
                <li><a href="../index.php?page=users&op=account">Retour à mon compte</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Rechercher...">
            </form>
        </div>
    </div>
</nav>