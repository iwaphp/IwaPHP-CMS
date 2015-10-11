<!-- TEMPLATE BASED ON BOOTSTRAP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require ROOT . 'templates/bootstrap/head.template.php'?>
</head>

<body>
    <?php require ROOT . 'templates/bootstrap/navbar.template.php'?>
<div class="container">

    <?php if(\IwaPHP\Session::getInstance()->hasFlashes()): ?>
    <?php foreach(\IwaPHP\Session::getInstance()->getFlashes() as $type => $message): ?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

    <?= $content; ?>

</div>
    <?php require ROOT . 'templates/bootstrap/footer.template.php'; ?>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="templates/bootstrap/css/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="templates/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
