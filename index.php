<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/cache.class.php');
$cache = new MicroCache("index ".strtolower($_GET['page']).$_GET['cat']);

$cache->lifetime = 7*24*60*60; // 1 week
$cache->patch = 'cachetmp/';

require_once('app/moduls.php');

$template['underdev'] and showunder();

if(!isset($_GET['clear_cache']) && $cache->check()){
	die($cache->out());
}else{
	$cache->start();
}

$template['get']	= $_GET;
$template['page']	= get_page();
$template['debug']	= $_SESSION['debug'];
$template['title']	= 'شرکت مهندسی پارس | ' . get_title();
$template['c_type'] = $cache->c_type;

$template['projects_cats_arr'] = db_getrows('projects_cats','*',true,'sort,id',20);
$template['projects_cats'] = gen_submenu_cats($template['projects_cats_arr'],'Projects','پروژه ها');

$template['products_cats_arr'] = db_getrows('products_cats','*',true,'sort,id',20);
$template['products_cats'] = gen_submenu_cats($template['products_cats_arr'],'Products','محصولات');

if($template['page']=='projects'){
	$cat = $_GET['cat'];
	$template['projects_arr'] = db_getrows('portfolio','*',($cat?"category=$cat":true),'sort',60);
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

db_close();

$cache->end();
