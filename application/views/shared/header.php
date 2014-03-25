<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>


<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" ><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Malate Literary Folio</title>

	<link rel="SHORTCUT ICON" href="<?php echo $assets; ?>img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo $assets; ?>stylesheets/app.css">
	<link rel="stylesheet" href="<?php echo $assets; ?>stylesheets/malatestyle.css">
	<link type="text/css" media="screen" rel="stylesheet" href="<?php echo $assets; ?>stylesheets/responsive-tables.css" />

	<script type="text/javascript" src="<?php echo $assets; ?>javascripts/others/responsive-tables.js"></script>
	<script src="<?php echo $assets; ?>javascripts/vendor/custom.modernizr.js"></script>

</head>
<body>