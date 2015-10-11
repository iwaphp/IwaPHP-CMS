<?php
if(!empty($_POST)) {

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        \IwaPHP\Session::getInstance()->setFlash('danger', "Les mots de passes ne correspondent pas");
    } else {
        $user_id = $_SESSION['auth']->id;
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $db->query('UPDATE users SET password = ?', [$password]);
        \IwaPHP\Session::getInstance()->setFlash('success', "Votre mot de passe a bien été mis à jour");
    }
}

?>
<p>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Changer votre adresse email</h3>
    </div>
    <div class="panel-body">
        <form action="" method="post">
            <p><div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">@</span>
                <input class="form-control" type="text" name="email" placeholder="Changer l'adresse email"  aria-describedby="sizing-addon2">
            </div></p>
<p><div class="input-group">
    <span class="input-group-addon" id="sizing-addon2">@</span>
    <input class="form-control" type="text" name="email_confirm" placeholder="Confirmation l'adresse email"  aria-describedby="sizing-addon2">
</div></p>
<button class="btn btn-primary">Modifier</button>
</form>
</div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Changer votre mot de passe</h3>
    </div>
    <div class="panel-body">
        <form action="" method="post">
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe">
            </div>
            <button class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
</p>
