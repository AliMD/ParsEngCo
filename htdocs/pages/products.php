<div class="content_wrap gallery">
	<header class="mh3 mb2 mr1 head">
		<h1>محصولات</h1>
	</header>
	<div class="pl1 pr1 pb4 content cover">
		<?php

			$dir = "./images/galleries/products";
			$allowed_type = array('jpg','jpeg','png','gif');

			$d = dir($dir);
			while( $f = $d->read() ){
				$file_type = end(explode('.',$f));
				if( !in_array(strtolower($file_type),$allowed_type) ) continue;

				$file_name = substr($f,0,-strlen($file_type)-1);

				echo
					"<div class='box left'>
					<a href='$dir/$file_name.$file_type'>
					<img src='$dir/thumbs/$file_name.$file_type' alt='$file_name' width='196' height='145' />
					<span lang='en-US'>$file_name</span>
					</a>
					</div>";				
			}

		?>
	</div>
	<?php include 'inc/copy-right.php'; ?>
</div>
