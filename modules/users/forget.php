<?php
if(!empty($_POST) && !empty($_POST['email'])) {
    $db = \IwaPHP\App::getDatabase();
    $auth = \IwaPHP\App::getAuth();
    $session = \IwaPHP\Session::getInstance();
    if($auth->resetPassword($db, $_POST['email'])){
        $session->setFlash('success', 'Les instructions du rappel de mot de passe vous ont été renvoyées par email');
        \IwaPHP\App::redirect('index.php?page=users&op=login');
    } else {
        $session->setFlash('danger', 'Aucun compte ne correspond à cette adresse');
    }
}

IwaPHP\App::setTitle('Mot de passe oublié');
?>


    <h2>Mot de passe oublié</h2>
    <div class="panel panel-default">
        <div class="panel-body">
        <form action="" method="POST">

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control"/>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        </div>
    </div>

