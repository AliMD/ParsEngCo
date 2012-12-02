<?php

@file_exists("./pages/$template[page].php") or $template['page'] = '404';

// view template
console_log($template);

inc('header');

inc('menu');

echo "<div class='ajax_loader'>";
inc($template['page'],'pages');
echo "</div>";

inc('footer');
