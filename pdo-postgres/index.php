<?php

require_once("config.php");

$connection = new PDO("pgsql:host=$dbHost; dbname=$dbName", $dbUser, $dbPassword);
