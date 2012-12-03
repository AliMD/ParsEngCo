<?php

@file_exists("./pages/$template[page].php") or $template['page'] = '404';

// view template
console_log($template);

inc('header');

echo '<div class="container">';

	inc('menu');

	echo "<div class='ajax_loader'>";

		inc($template['page'],'pages');

		echo "<span class='ajax_page_title' hidden='hidden'>$template[title]</span>";

	echo "</div>";

echo '</div>';

inc('slideshow');

inc('analytic');

console_log_show();

inc('footer');
