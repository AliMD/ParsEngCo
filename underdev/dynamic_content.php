<?php

function get_dynamic_content($file_name,$befor='',$after=''){
	$file_path = "./contents/{$file_name}.txt";
	$content = @file_get_contents($file_path);
	if(strlen($content)>0){
		return $befor.$content.$after;
	}
}

function dynamic_content($file_name,$befor,$after){
	echo get_dynamic_content($file_name,$befor,$after);
}