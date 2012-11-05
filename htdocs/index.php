<?php
error_reporting(E_ALL ^ E_NOTICE);

$sitedown = true;

session_start();

isset($_GET['debug']) and $_SESSION['debug']=$_GET['debug'];

if($sitedown && !$_SESSION['debug']){
	header("Location: ./underdev/");
	exit();
}

@include "theme.php";