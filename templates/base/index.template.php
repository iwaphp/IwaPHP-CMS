<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
       <?php require ROOT . 'templates/base/head.template.php'; ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
		<?php require ROOT . 'templates/base/navbar.template.php'; ?>

        <!-- Homepage Slider -->
        <?php //if(!isset($_GET['page'])) { require ROOT . 'templates/base/slider.template.php'; } ?>
        <!-- End Homepage Slider -->
		<div class="section">
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
		</div>

	    <!-- Footer -->
	    <?php require ROOT . 'templates/base/footer.template.php'; ?>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="templates/base/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="templates/base/js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="templates/base/js/jquery.fitvids.js"></script>
        <script src="templates/base/js/jquery.sequence-min.js"></script>
        <script src="templates/base/js/jquery.bxslider.js"></script>
        <script src="templates/base/js/main-menu.js"></script>
        <script src="templates/base/js/template.js"></script>

    </body>
</html>