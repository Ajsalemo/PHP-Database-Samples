<?php

require_once("config.php");
require_once("todo.php");

$connection = new PDO("sqlsrv:server=tcp:$dbHost,1433; Database=$dbName", $dbUser, $dbPassword);
$todo = new Todo();

$todo->connect($connection);
$todo->createQueryMethod();
$todo->deleteQueryMethod();
$todo->updateQueryMethod();
$todo->selectAllQueryMethod();


// Close the connection
$connection = null;
