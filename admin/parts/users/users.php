<?php
require 'Controller/UsersController.php';
$users = new Admin\Parts\Users\Controller\UsersController;
$db = \IwaPHP\App::getDatabase();

if(isset($_GET['edit'])) {

    $users->setId($_GET['edit']);

    ?>
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="">Level</label>
        <input type="text" name="level" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="">Template</label>
        <input type="text" name="template" class="form-control"/>
    </div>
    <?php

}
elseif(isset($_GET['remove'])) {
    require ROOT . 'admin/parts/users/remove.php';
}
elseif(isset($_GET['ban'])) {
    require ROOT . 'admin/parts/users/ban.php';
} else { ?>

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
            <?php foreach($users->getAllUser($db) as $allusers):?>
                <tr>
                    <td><?= $allusers->id; ?></td>
                    <td><?= $allusers->username; ?></td>
                    <td><?= $allusers->email; ?></td>
                    <td><?= ($allusers->confirmed_at == false) ? 'Inactif' : $allusers->confirmed_at; ?></td>
                    <td><?= $allusers->level; ?></td>
                    <td><?= $allusers->template; ?></td>
                    <td><a href="index.php?admin=users&remove=<?= $allusers->id; ?>" class="btn btn-default" aria-label="Left Align">
                            Supprimer
                        </a>
                        <a href="index.php?admin=user&edit=<?= $allusers->id; ?>" class="btn btn-default" aria-label="Left Align">
                            Modifier
                        </a>
                        <a href="index.php?admin=users&ban=<?= $allusers->id; ?>" class="btn btn-default" aria-label="Left Align">
                            Bannir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
</div>
</div>
<?php
}
?>
