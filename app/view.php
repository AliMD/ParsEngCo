<?php

@file_exists("./pages/$template[page].php") or $template['page'] = '404';

// view template
console_log($template);

inc('header');

inc('menu');

inc($template['page'],'pages');

inc('footer');
