<?php

require_once("config.php");


$connection = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPassword);

$selectAll = "SELECT * FROM pluralsighttodos";

$selectAllQuery = $connection->query($selectAll);

// Print out the result
foreach($selectAllQuery as $row)
{
    print_r($row['todo'] . PHP_EOL);
}