<?php
$envFile = __DIR__ . '/../app/env.php';
if(file_exists($envFile)) {
	require_once $envFile;
} else {
	echo "Please copy app/env.example.php to app/env.php and add your values.";
	exit;
}

$autoloadFile = __DIR__ . '/../vendor/autoload.php';
if(file_exists($autoloadFile)) {
	require_once $autoloadFile;
	Ofe\onlyFE::run();
}
echo "Please run <code>composer install</code>";
exit;