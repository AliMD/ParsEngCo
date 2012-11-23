<?php
session_start();

require('app/config.php');
require_once('app/db.php');

function get_page(){
	return isset($_GET[page]) ? strtolower($_GET[page]) : 'home';
}

function showunder(){
	isset($_GET['debug']) and $_SESSION['debug']=$_GET['debug'];
	if(!$_SESSION['debug']){
		header("Location: ./underdev/");
		exit();
	}
}

function finalise (){
	db_close();
}

function inc($filename,$folder='inc'){
	global $template;
	@include "$folder/$filename.php";
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

	$files = scandir($path);
	foreach($files as $file){
		$tmp  = explode('.',$file);
		$file_type = end( $tmp );
		if( !in_array(strtolower($file_type),$types) ) continue;
		$files_ok[] = $file;
	}

	return $files_ok;
}

function gen_products_list($path,$images){
	$html = '';
	foreach ($images as $img) {
		$tmp  = explode('.',$img);
		$type = end($tmp);
		$name = substr($img,0, -1*strlen($type)-1 );
		$html .= "
			<div class='box left'>
				<a class='darkbox' href='$path/$img' title='کد محصول : $name'>
					<img src='{$path}thumbs/$img' alt='Pars Engineering Product $name' width='200' height='150' />
					<span lang='en-US'>$name</span>
				</a>
			</div>
		";
	}
	return $html;
} 
