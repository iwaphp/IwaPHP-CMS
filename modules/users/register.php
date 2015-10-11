<?php
if(!empty($_POST)){

    $errors = array();

    $db = \IwaPHP\App::getDatabase();
    $validator = new \IwaPHP\Validator($_POST);
    $validator->isAlpha('username', "Votre pseudo n'est pas valide");
    if($validator->isValid()) {
        $validator->isUniq('username', $db, 'users', 'Ce pseudo est déjà pris');
    }
    $validator->isEmail('email', "Votre email n'est pas valide");
    if($validator->isValid()) {
        $validator->isUniq('email', $db, 'users', 'Cet email est déjà utilisé pour un autre compte');
    }
    $validator->isConfirmed('password', "Vous devez entrer un mot de passe valide");

    if($validator->isValid()){

        \IwaPHP\App::getAuth()->register($db, $_POST['username'], $_POST['password'], $_POST['email']);
        \IwaPHP\Session::getInstance()->setFlash('success', 'Un email de confirmation vous a été envoyé pour valider votre compte');
        \IwaPHP\App::redirect('index.php?page=users&op=login');

    } else {
        $errors = $validator->getErrors();
    }

}
IwaPHP\App::setTitle("S'inscrire");
?>
<h2>S'inscrire</h2>

<?php if(!empty($errors)):?>
    <div class="alert alert-danger">
        <p>Vous n'avez pas rempli le formulaire correctement</p>
        <ul><?php foreach($errors as $errors): ?>
            <li><?= $errors; ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

<div class="panel panel-default">
    <div class="panel-body">
        <form action="" method="POST">

            <div class="form-group">
                <label for="">Pseudo</label>
                <input type="text" name="username" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="">Confirmez votre mot de passe</label>
                <input type="password" name="password_confirm" class="form-control"/>
            </div>

            <button type="submit" class="btn btn-primary">M'inscrire</button>
        </form>

    </div>
</div>
