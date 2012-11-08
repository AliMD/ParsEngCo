<div class="content_wrap contact-us">
	<header class="mh3 mr1 pb5 head">
		<h1>تماس با ما</h1>
	</header>
	<div class="pl1 pr1 pb5 content cover">
		<section class="w10 right form">
			<br/>
			<form id="contact-form" action="sendmail.php" method="post" target='ifrm'>
				<input title="نام" type="text" name="name" id="name" placeholder='نام' />
				<input title="پست الکترونیکی" type="text" name="mail" id="mail" placeholder='پست الکترونیکی' />
				<input title="موضوع" type="text" name="subject" id="subject" placeholder='موضوع' />
				<textarea title="متن پیام" name="msg" id="msg" cols="45" rows="12" placeholder='متن پیام'></textarea>
				<input title="ارسال" class="font btn_submit" name="submit" id='btn_submit' type="submit" value="ارسال" />
			</form>
		</section>
		<section class="mh10 mr10 info">
			<h3 class='pb2 font'>راههای تماس با ما!</h3>
			<ul class='pb2' lang="en-US">
				<li style="background:url('./images/icons/phone_Android.png') no-repeat right 9px ">+98 915 41 41 40 2</li>
				<li style="background:url('./images/icons/phone_Android.png') no-repeat right 9px ">+98 915 324 1559</li>
				<li style="background:url('./images/icons/email.png') no-repeat right 9px ">info@parseng.co</li>
				<li lang="fa-IR" class="fa" style="background:url('./images/icons/house.png') no-repeat right 9px ">مشهد ، کوچه اونجا ، پلاک همونجا</li>
			</ul>
			<iframe width="210" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=36.324202,59.491592&amp;num=1&amp;t=h&amp;vpsrc=0&amp;ie=UTF8&amp;z=14&amp;iwloc=near&amp;ll=36.324303,59.491466&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=36.324202,59.491592&amp;num=1&amp;t=h&amp;vpsrc=0&amp;ie=UTF8&amp;z=14&amp;iwloc=near&amp;ll=36.324303,59.491466&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>
		</section>
		
		<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
	</div>
	<?php include 'inc/copy-right.php'; ?>
	<?php include 'inc/slideshow.php'; ?>
</div>
