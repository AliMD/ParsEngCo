<?php
session_start();

isset($_GET['debug']) and $_SESSION['debug']=!!$_GET['debug'];

require('app/config.php');
require_once('app/db.php');

function get_page(){
	return isset($_GET['page']) ? str_replace(array('+',' ','%20'), '-', strtolower($_GET['page']) ) : 'home';
}

function get_title(){
	$title = $_GET['desc'] ? $_GET['desc'] : ($_GET['page'] ? $_GET['page'] : 'سرآغاز');
	$title = str_replace(array('-','+','%20'), ' ', $title );
	$title = str_replace(array('/'), ' | ', $title );
	return ucwords($title);
}

function console_log($msg){
	global $console_log_arr;
	$console_log_arr[] = $msg;
}

function console_log_show(){
	global $console_log_arr;
	if(!$console_log_arr) return;
	echo '<script type="text/javascript">try{';
	foreach ($console_log_arr as $log){
		$log=json_encode($log);
		echo "console.log('PHP:',$log);";
	}
	echo '}catch(e){}</script>';
	unset($console_log_arr);
}

function showunder(){
	global $template;
	if(!$_SESSION['debug']){
		header("Location: $template[url]underdev/");
		exit();
	}
}

function inc($filename,$folder='inc'){
	global $template;
	@include "$folder/$filename.php";
}

function gen_submenu_cats($cats_arr,$prefix_page,$prefix_desc,$separator = "/"){
	$html = '<ul>';
	foreach ($cats_arr as $cat) {
		$url = str_replace(' ', '+', "$prefix_page$separator$cat[id]$separator$prefix_desc$separator$cat[name]");
		$html .= "<li><a href='$url'>$cat[name]</a></li>";
	}
	$html .= '</ul>';
	return $html;
}

function gen_project($project,$cls){
	$html = '';
	$project and $html .= "
			<article class='$cls box'>
				<h3>$project[name]</h3>
				<a class='darkbox' href='images/galleries/projects/$project[image]' title='$project[excerpt]'>
					<img src='images/galleries/projects/thumbs/$project[thumb]' alt='$project[name], $project[excerpt]' width='290' height='210' />
					<span></span>
				</a>
				<p>$project[description]</p>
			</article>";
	return $html;
}

function gen_projects_list($projects_arr){
	$html = '';
	$len = sizeof($projects_arr);
	for($i=0; $i<$len; $i+=2) {
		$html .= "\n\t\t<section class='mh5 mt4 row cover'>";
		$html .= gen_project($projects_arr[$i],'right');
		$html .= gen_project($projects_arr[$i+1],'mra');
		$html .= "\n\t\t</section>\n";
	}
	return $html;
}

function get_filenames($path,$types){
	$files_ok = array();
	
	if(is_dir($path)){
		$files = scandir($path);
		foreach($files as $file){
			$tmp  = explode('.',$file);
			$file_type = end( $tmp );
			if( !in_array(strtolower($file_type),$types) ) continue;
			$files_ok[] = $file;
		}
	}

	return $files_ok;
}

function gen_products_list($products_arr){
	$html = '';
	foreach ($products_arr as $product) {
		$title = $product['description'] ? $product['description'] : "کد محصول : $product[code]";
		$html .= "
			<div class='box left'>
				<a class='darkbox' href='images/galleries/products/$product[image]' title='$title'>
					<img src='images/galleries/products/thumbs/$product[thumb]' alt='Pars Engineering Product $title' width='200' height='150' />
					<span lang='en-US'>$product[code]</span>
				</a>
			</div>
		";
	}
	return $html;
} 
