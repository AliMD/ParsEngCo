<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['page'] = get_page();

if($template['page']=='projects'){
	$cat = $_GET['cat'];
	$template['projects_arr'] = db_getrows('portfolio','*',($cat?"category=$cat":true),'sort',40);
	$template['projects'] = gen_projects_list($template['projects_arr']);

	if($template['projects']=='') $template['page']='404';
}

else if ($template['page']=='products') {
	$cat = $_GET['cat'];
	// images/galleries/products/
	$template['products_arr'] = db_getrows('products','*',($cat?"category=$cat":true),'sort',60);
	$template['products'] .= gen_products_list($template['products_arr']);

	if($template['products']=='') $template['page']='404';
}

inc("view",'app');

finalise();
