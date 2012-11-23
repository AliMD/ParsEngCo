<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['page'] = get_page();

if($template['page']=='projects'){
	$cat = $_GET['cat'];
	$projects = db_getrows('portfolio','*',($cat?"category=$cat":true),'sort',40);
	$template['projects'] = gen_projects_list($projects);
}

else if ($template['page']=='products') {
	$image_dir = "images/galleries/products/";
	$allowed_type = array('jpg','jpeg','png','gif');

	$files = get_filenames($image_dir,$allowed_type);

	$template['projects'] = gen_products_list($image_dir,$files);
}

inc("view",'app');

finalise();