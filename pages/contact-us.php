<div class="content_wrap contact-us">
	<header class="mh3 mr1 pb5 head">
		<h1>تماس با ما</h1>
	</header>
	<div class="pl1 pr1 pb5 content cover">
		<section class="w10 right form">
			<br/>
			<form id="contact-form" action="sendmail.php" method="post" target='ifrm'>
				<input title="نام" type="text" name="name" id="name" placeholder='نام' />
				<input title="تلفن همراه" type="text" name="tell" id="tell" placeholder='تلفن همراه' />
				<input title="پست الکترونیکی" type="text" name="mail" id="mail" placeholder='پست الکترونیکی' />
				<input title="موضوع" type="text" name="subject" id="subject" placeholder='موضوع' />
				<textarea title="متن پیام" name="msg" id="msg" cols="45" rows="12" placeholder='متن پیام'></textarea>
				<input title="ارسال" class="font btn_submit" name="submit" id='btn_submit' type="submit" value="ارسال" />
			</form>
		</section>
		<section class="mh10 mr10 info">
			<h3 class='pb2 font'>راههای تماس با ما!</h3>
			<ul class='pb2' lang="en-US">
				<li style="background:url('./images/icons/phone_Android.png') no-repeat right 9px ">+98 511 848 0122</li>
				<li style="background:url('./images/icons/phone_Android.png') no-repeat right 9px ">+98 511 846 4328</li>
				<li style="background:url('./images/icons/phone_Android.png') no-repeat right 9px ">+98 915 324 1559</li>
				<li style="background:url('./images/icons/email.png') no-repeat right 9px ">info@parseng.co</li>
				<li lang="fa-IR" class="fa" style="background:url('./images/icons/house.png') no-repeat right 9px ">مشهد، خیابان سناباد، سناباد ۲۶ پلاک ۱۰، طبقه ی اول</li>
			</ul>
			<iframe width="210" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Sanabad+26,+Mashhad,+Khorasan+Razavi,+Iran&amp;aq=&amp;sll=36.302269,59.580534&amp;sspn=0.036592,0.077162&amp;ie=UTF8&amp;hq=&amp;hnear=Sanabad,+Mashhad,+Khorasan+Razavi,+Iran&amp;ll=36.301591,59.582734&amp;spn=0.004574,0.009645&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small></small>
		</section>
		
		<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
	</div>
	<?php inc('copy-right'); ?>
</div>
