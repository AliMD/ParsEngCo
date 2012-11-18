<?php
session_start();

require_once('db.php');

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

