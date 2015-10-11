<?php
require ROOT . 'parts/auth/class/Auth.php';
$level = new Admin\Parts\Auth();
$db = \IwaPHP\App::getDatabase();
?>

<div class="container-fluid">
    <div class="row">
        <?php include ROOT . 'inc/sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Droits/Permissions</h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom du grade/level</th>
                        <th>Niveau id</th>
                        <th>Peut administrer</th>
                        <th>Peut administrer Modules/Plugins</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($level->getAuthInf($db) as $alllevel):?>
                        <tr>
                            <td><?= $alllevel->id; ?></td>
                            <td><?= $alllevel->name; ?></td>
                            <td><span class="label label-default"><?= $alllevel->level; ?></span></td>
                            <td><?= $alllevel->modules; ?></td>
                            <td><?= $alllevel->external_modules; ?></td>
                            <td><button type="button" class="btn btn-default" aria-label="Left Align">
                                    Supprimer
                                </button>
                                <button type="button" class="btn btn-default" aria-label="Left Align">
                                    Modifier
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
