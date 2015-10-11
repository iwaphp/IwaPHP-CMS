<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?= \IwaPHP\App::getTitle($db); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="templates/base/css/bootstrap.min.css">
<link rel="stylesheet" href="templates/base/css/icomoon-social.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="templates/base/css/leaflet.css" />
<!--[if lte IE 8]>
<link rel="stylesheet" href="templates/base/css/leaflet.ie.css" />
<![endif]-->
<link rel="stylesheet" href="templates/base/css/main.css">

<script src="templates/base/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<?= \IwaPHP\Template::defaultHeadIncJs(null); ?>
<?= \IwaPHP\Template::initPlugins(); ?>