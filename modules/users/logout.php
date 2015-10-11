<?php
\IwaPHP\App::getAuth()->logout();
\IwaPHP\Session::getInstance()->setFlash('success', 'Vous êtes maintenant déconnecté');
\IwaPHP\App::redirect('index.php?page=users&op=login');