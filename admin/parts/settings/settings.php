<?php
require ROOT . 'parts/settings/class/Settings.php';
$config = new Admin\Parts\Settings();
$db = \IwaPHP\App::getDatabase();
?>
<div class="container-fluid">
    <div class="row">
        <?php include ROOT . 'inc/sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Paramètres</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="" method="POST">

                            <div class="input-group">
                                <label class="label-p" for="">Nom du site :</label>
                                <input type="text" class="form-control" placeholder="Nom de votre site"<?= ($config->getSiteInf($db, 'name_site') != null ? 'value="' . $config->getSiteInf($db, 'name_site') . '"' : null); ?>>
                            </div>

                            <div class="input-group">
                                <label class="label-p" for="">Template :</label>
                                <input type="text" class="form-control" placeholder="Template par défaut"<?= ($config->getSiteInf($db, 'default_template') != null ? 'value="' . $config->getSiteInf($db, 'default_template') . '"' : null); ?>>
                            </div>

                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
