<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once('app/moduls.php');

showunder();

$template['page'] = get_page();

if($template['page']=='projects'){
	$cat = $_GET['cat'];
	$projects = db_getrows('portfolio','*',($cat?"category=$cat":true),'sort',40);
	$template['projects'] = gen_projects_list($projects);

	if($template['projects']=='') $template['page']='404';
}

else if ($template['page']=='products') {
	$allowed_type = array('jpg','jpeg','png','gif');
	$cat = $_GET['cat'];
	$image_dir = "images/galleries/products/";

	$template['products']='';
	if($cat){
		$files=get_filenames($image_dir."$cat/",$allowed_type);
		$template['products'] .= gen_products_list($image_dir."$cat/",$files);
	}else{
		for($i=1;$i<=3;$i++){
			$files=get_filenames($image_dir."$i/",$allowed_type);
			$template['products'] .= gen_products_list($image_dir."$i/",$files);
		}
	}

	if($template['products']=='') $template['page']='404';
}

inc("view",'app');

finalise();
