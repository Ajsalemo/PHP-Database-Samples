<?php

require_once("config.php");
require_once("todo.php");

$connection = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPassword);
$todo = new Todo();

$todo->connect($connection);
$todo->createQueryMethod();
$todo->selectAllQueryMethod();

// Close the connection
$connection = null;
