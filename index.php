<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['get'] = $_GET;
$template['page'] = get_page();
$template['title'] = get_title();

$template['projects_cats_arr'] = db_getrows('projects_cats','*',true,'sort,id',10);
$template['projects_cats'] = gen_submenu_cats($template['projects_cats_arr'],'Projects','پروژه ها');

$template['products_cats_arr'] = db_getrows('products_cats','*',true,'sort,id',10);
$template['products_cats'] = gen_submenu_cats($template['products_cats_arr'],'Products','محصولات');

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
