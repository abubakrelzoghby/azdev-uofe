<?php

$baseUrl = '//path/to/public/';

$paramsChar = 'p';

$logic = 'logic';

$views = 'views';

$layout = 'layout';

// DO NOT CHANGE AFTER THIS LINE

define('DS', DIRECTORY_SEPARATOR);

define('baseUrl' , ($baseUrl?:'/'));
define('paramsChar' , ($paramsChar?:'p'));

define('logicDir', __DIR__ .  DS . ($logic?:'logic') . DS);
define('viewsDir', __DIR__ .  DS . ($views?:'viewsS') . DS);
define('layoutDir', ($layout?:'layout'));