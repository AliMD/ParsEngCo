<!DOCTYPE HTML>
<html lang="fa_IR">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
	<style type="text/css">

		@font-face {
			font-family: 'Nazanin';
			src: url('fonts/BNazanin.eot');
			src: url('fonts/BNazanin.eot?#iefix') format('embedded-opentype'),
				 url('fonts/BNazanin.woff') format('woff'),
				 url('fonts/BNazanin.ttf') format('truetype');
			font-weight	: normal;
			font-style	: normal;
			-webkit-font-smoothing	: antialiased;
		}

		:lang(fa-IR) {
			font-family	: 'Nazanin';
			direction	: rtl;
		}

		body {
			background-color: transparent;
		}

		.ok {
			color:#23B3AB;
			text-align: center;
		}

		.err {
			color:#BD5B3D;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin = 'info@mydomain.com';

		$name    = $_POST['name'];
		$email   = $_POST['mail'];
		$text    = $_POST['txt'];

		if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($text)>=10 ){
			if( @mail (
					$admin,
					"mydomain.com contact : $subject",
					$text,
					"From:$name <$email" )
			){
				echo '<h2 class="ok">ایمیل شما ارسال شد</h2>';
			}else{
				echo '<h2 class="err">خطا در ارسال ایمیل</h2>';
			}
		}else{
			echo '<h2 class="err">لطفا دوباره تلاش کنید</h2>';
		}
	?>
</body>
</html>