<?php

$dbName = getenv('DATABASE_NAME');
$dbHost = getenv('DATABASE_HOST');
$dbUser = getenv('DATABASE_USER');
$dbPassword = getenv('DATABASE_PASSWORD');

echo $dbName . PHP_EOL;
echo $dbHost . PHP_EOL;
echo $dbUser . PHP_EOL;
echo $dbPassword . PHP_EOL;
