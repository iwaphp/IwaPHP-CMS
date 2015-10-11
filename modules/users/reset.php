<?php
if(isset($_GET['id']) && isset($_GET['token'])) {
    $auth = \IwaPHP\App::getAuth();
    $db = \IwaPHP\App::getDatabase();
    $user = $auth->checkResetToken($db, $_GET['id'], $_GET['token']);
    if($user) {
        if(!empty($_POST)){
            $validator = new Validator($_POST);
            $validator->isConfirmed('password');
            if($validator->isValid()){
                $password = $auth->hashPassword($_POST['password']);
                $db->query('UPDATE users SET password = ?, reset_at = NULL, reset_token = NULL WHERE id = ?', [$password, $_GET['id']]);
                $auth->connect($user);
                \IwaPHP\Session::getInstance()->setFlash('success', "Votre mot de passe a bien été modifié");
                \IwaPHP\App::redirect('index.php?page=users&op=account');
            }
        }
    }else{
        \IwaPHP\Session::getInstance()->setFlash('danger', "Ce token n'est pas valide");
        \IwaPHP\App::redirect('index.php?page=users&op=login');
    }
}else{
    \IwaPHP\App::redirect('index.php?page=users&op=login');
}

IwaPHP\App::setTitle('Réinitialiser mon mot de passe');
?>


    <h2>Réinitialiser mon mot de passe</h2>

    <form action="" method="POST">

       <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Confirmation du mot de passe</label>
            <input type="password" name="password_confirm" class="form-control"/>
        </div>

        <button type="submit" class="btn btn-primary">Réinitialiser votre mot de passe</button>
    </form>


