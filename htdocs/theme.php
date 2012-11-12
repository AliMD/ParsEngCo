<?php

function inc($filename,$folder='inc'){
	global $title;
	@include "$folder/$filename.php";
}

$content = isset($_GET[page]) ? $_GET[page] : 'home';
$title = ucwords(str_replace(array('-','%20'), ' ', $content));

@file_exists("./pages/$content.php") or $content = '404';

// view template

inc('header');

inc('menu');

inc($content,'pages');

inc('footer');
