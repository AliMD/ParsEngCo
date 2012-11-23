<?php require_once('dynamic_content.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>		<html lang="en-US" dir="ltr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>			<html lang="en-US" dir="ltr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>			<html lang="en-US" dir="ltr" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->	<html lang="en-US" dir="ltr" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width" />
	<?php dynamic_content('page_title',"<title>",'</title>'); ?>
	<?php dynamic_content('description_text','<meta name="description" content="','" />'); ?>
	<link rel="stylesheet" type="text/css" href="1styles.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="scripts/modernizr.js"></script>
	<script type="text/javascript"> document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>'); </script>
	<script type="text/javascript" src="scripts/underdev.js"></script>
</head>
<body>
	<header></header>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	<section class='slideshow'>
