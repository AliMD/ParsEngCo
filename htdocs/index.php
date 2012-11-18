<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['page'] = get_page();
if($template['page']=='projects'){
	$projects = db_getrows('portfolio','*',true,'sort',40);
	$template['projects'] = gen_projects_list($projects);
}

inc("view",'app');

finalise();