<?php
if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['level']) && isset($_POST['template'])) {
    $users->setNom($POST['nom']);
    $users->setEmail($POST['email']);
    $users->setLevel($POST['level']);
    $users->setTemplate($POST['template']);
    $users->updateUser($db);
} else {
    $users->fetchUser($db);
    ?>
<form action="index.php?admin=users" method="post">
    <div class="input-group">
        <label class="label-p" for="">Nom :</label>
        <input type="text" class="form-control" placeholder="Nom d'utilisateur<?= $users->getNom() ?>">
    </div>
    <div class="input-group">
        <label class="label-p" for="">E-mail :</label>
        <input type="email" class="form-control" placeholder="Adresse e-mail<?= $users->getEmail() ?>">
    </div>
    <div class="input-group">
        <label class="label-p" for="">Autorisations/Level :</label>
        <input type="text" class="form-control" placeholder="Level<?= $users->getLevel() ?>">
    </div>
    <div class="input-group">
        <label class="label-p" for="">Thème graphique :</label>
        <input type="text" class="form-control" placeholder="Template<?= $users->getTemplate() ?>">
    </div>

</form>
<?php
}