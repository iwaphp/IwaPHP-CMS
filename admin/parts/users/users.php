<?php
require ROOT . 'parts/users/class/Users.php';
$users = new Admin\Parts\Users();
$db = \IwaPHP\App::getDatabase();
?>

<div class="container-fluid">
    <div class="row">
        <?php include ROOT . 'inc/sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Utilisateurs</h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Activé le</th>
                        <th>Level</th>
                        <th>Template</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users->getUsersInf($db) as $allusers):?>
                    <tr>
                        <td><?= $allusers->id; ?></td>
                        <td><?= $allusers->username; ?></td>
                        <td><?= $allusers->email; ?></td>
                        <td><?= ($allusers->confirmed_at == false) ? 'Inactif' : $allusers->confirmed_at; ?></td>
                        <td><?= $allusers->level; ?></td>
                        <td><?= $allusers->template; ?></td>
                        <td><button type="button" class="btn btn-default" aria-label="Left Align">
                                Supprimer
                            </button>
                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                Modifier
                            </button>
                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                Bannir
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
