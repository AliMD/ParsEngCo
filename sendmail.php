<!DOCTYPE HTML>
<html lang="fa-IR">
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
			direction: rtl;
		}

		.ok {
			color:#1A1;
		}

		.err {
			color:#A11;
		}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin = 'info@parseng.co';
		
		$name		= $_POST['name'];
		$tell		= $_POST['tell'];
		$email		= $_POST['mail'];
		$msg		= $_POST['msg'];
		$subject	= $_POST['subject'];

		if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($msg)>=8 && strlen($tell)>=11 ){
			if( @mail ( $admin,"ParsEng.co contact : $subject", "$msg\r\n\r\nMobile: $tell", "From:$admin\r\nReply-To:$name <$email>" ) ){
				echo '<h2 class="ok">با تشکر، ایمیل شما ارسال شد.</h2>';
			}else{
				echo '<h2 class="err">خطا در ارسال ایمیل، لطفا دوباره تلاش کنید.</h2>';
			}
		}else{
			echo '<h2 class="err">خطا در اطلاعات فرم !</h2>';
		}
	?>
</body>
</html>