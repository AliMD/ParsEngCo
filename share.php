<!DOCTYPE HTML>
<html lang="fa-IR">
<head>
	<meta charset="UTF-8" />
	<title>share it ...</title>
	<link href='http://alimd.github.io/1fonts/1fonts.css?v=1.3' rel='stylesheet' type='text/css' />
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
		}
		body {
			background-color:transparent;
			direction: rtl;
			font-family: nazanin;
			font-size: 14px;
		}
		.ok{color:#1A1}
		.err{color:#A11}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin	= 'PrsEng <info@parseng.co>';
		$name	= $_REQUEST['name'];
		$email	= $_REQUEST['email'];
		$webLink = 'www.ParsEng.co';
		$subject = 'شماره جدید';
		$msg	= "آقا/خانم $name مشاهده سایت دکتر بخارایی ( $webLink ) را به شما پیشنهاد میکند";

		if( strlen($name)>=3 && strlen($email)>=7 ) {
			if( @mail ( $email,$subject,$msg, "From: $admin\r\n" ) ) {
				echo '<h2 class="ok">ثبت شد</h2>';
			} else {
				echo "<h2 class='err'>خطا</h2>";
			}
		} else {
			echo '<h2 class="err">خطا!</h2>';
		}
	?>
</body>
</html>