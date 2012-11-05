</section>
<footer>
	<?php dynamic_content('footer_text_left',"<h1>",'</h1>') ?>
	<?php dynamic_content('footer_text_right',"<h2>",'</h2>') ?>
</footer>

<script>
	var _gaq=[['_setAccount','<?php dynamic_content("google_analytics_id",'',''); ?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>