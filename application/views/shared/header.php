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
	<title>MLF <?php echo $title ?></title>

	<link rel="SHORTCUT ICON" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/stylesheets/app.css'); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/stylesheets/malatestyle.css'); ?>" />
	<link type="text/css" media="screen" rel="stylesheet" href="<?php echo $assets; ?>stylesheets/responsive-tables.css" />

	<script type="text/javascript" src="<?php echo $assets; ?>javascripts/others/responsive-tables.js"></script>
	<script src="<?php echo $assets; ?>javascripts/vendor/custom.modernizr.js"></script>

</head>
<body>