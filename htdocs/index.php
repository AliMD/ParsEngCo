<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['page'] = get_page();
if($page=='projects'){
	//
}

inc("view",'app');