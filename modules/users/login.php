<?php
if($auth->user()){
    \IwaPHP\App::redirect('index.php?page=users&op=account');
}

if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $user = $auth->login($db, $_POST['username'], $_POST['password'], isset($_POST['remember']));
    $session = \IwaPHP\Session::getInstance();
    if ($user) {
        $session->setFlash('success', 'Vous êtes bien connecté');
        \IwaPHP\App::redirect('index.php?page=users&op=account');
    } else {
        $session->setFlash('danger', 'Identifiant ou mot de passe incorrect');
        \IwaPHP\App::redirect('index.php?page=users&op=login');
    }
}

IwaPHP\App::setTitle('Se connecter');
?>
<h2>Se connecter</h2>

<div class="panel panel-default">
    <div class="panel-body">


        <form action="" method="POST">

            <div class="form-group">
                <label for="">Pseudo ou email</label>
                <input type="text" name="username" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="">Mot de passe <a href="index.php?page=users&op=forget">(J'ai oublié mon mot de passe)</a></label>
                <input type="password" name="password" class="form-control"/>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</div>



