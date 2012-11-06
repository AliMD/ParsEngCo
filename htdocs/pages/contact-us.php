<div class="content_wrap contact-us">
	<header class="mh3 mt3 mr1 pb5 head">
		<h2>تماس با ما</h2>
	</header>
	<div class="pl1 pr1 pb5 content cover">
		<section class="w9 right form">
			<form id="contact-form" action="sendmail.php" method="post" target='ifrm'>
				<abbr title="نام">
					<input type="text" name="name" id="name" placeholder='نام' />
				</abbr>
				<abbr title="آدرس پست الکترونیکی">
					<input type="text" name="mail" id="mail" placeholder='آدرس پست الکترونیکی' />
				</abbr>
				<abbr title="متن پیام">
					<textarea name="txt" id="txt" cols="30" rows="10" placeholder='متن پیام'></textarea>
				</abbr>
				<abbr title="ارسال">
					<input class="font btn_submit" name="submit" id='btn_submit' type="submit" value="ارسال" />
				</abbr>
			</form>
			<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
		</section>
		<section class="w7 mh10 mr10 info">
			<h3 class='pb2 font'>راههای تماس با ما!</h3>
			<ul class='pb2' lang="en-US">
				<li style="background:url('./images/icons/phone_Android.png') no-repeat right 9px ">+98 915 41 41 40 2</li>
				<li style="background:url('./images/icons/phone_Android.png') no-repeat right 9px ">+98 915 324 1559</li>
				<li style="background:url('./images/icons/email.png') no-repeat right 9px ">info@parseng.co</li>
				<li lang="fa-IR" class="fa" style="background:url('./images/icons/house.png') no-repeat right 9px ">مشهد ، کوچه اونجا ، پلاک همونجا</li>
			</ul>
			<iframe width="210" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=36.324202,59.491592&amp;num=1&amp;t=h&amp;vpsrc=0&amp;ie=UTF8&amp;z=14&amp;iwloc=near&amp;ll=36.324303,59.491466&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q=36.324202,59.491592&amp;num=1&amp;t=h&amp;vpsrc=0&amp;ie=UTF8&amp;z=14&amp;iwloc=near&amp;ll=36.324303,59.491466&amp;source=embed" style="color:#0000FF;text-align:left"></a></small>
		</section>
	</div>
	<footer class="pr1 pl1 mh8 cover footers">
		<?php include 'inc/copy-right.php'; ?>
	</footer>
</div>
