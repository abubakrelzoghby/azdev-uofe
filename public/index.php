<?php
require_once __DIR__ . '/../app/env.php';

$autoloadFile = __DIR__ . '/../vendor/autoload.php';
if(file_exists($autoloadFile)) {
	require_once $autoloadFile;
	Ofe\onlyFE::run();
}

echo "Please run <code>composer install</code>";
exit;