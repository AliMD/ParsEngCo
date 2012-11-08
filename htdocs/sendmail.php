<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
	<style type="text/css">
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

		$admin = 'info@mydomain.com';
		
		$name		= $_POST['name'];
		$email		= $_POST['mail'];
		$msg		= $_POST['msg'];
		$subject	= $_POST['subject'];

		if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($msg)>=8 ){
			if( @mail ( $admin,"ParsEng.co contact : $subject", $msg, "From:$name <$email>" ) ){
				echo '<h2 class="ok">با تشکر، ایمیل شما ارسال شد.</h2>';
			}else{
				echo '<h2 class="err">خطا در ارسال ایمیل، لطفا دوباره تلاش کنید.</h2>';
			}
		}else{
			echo '<h2 class="err">خطا در دریافت اطلاعات فرم !</h2>';
		}
	?>
</body>
</html>