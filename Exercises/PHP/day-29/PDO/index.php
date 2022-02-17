<?php


try {
    $connection = new PDO(
        'mysql:dbname=world;host=localhost;charset=utf8', // connection string
        'root', // isername 
        '' // password
    );
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit(); // if there is am error, stop execution
}


$query = "
    SELECT `cities`.*
    FROM `cities`
    WHERE `cities`.`name` = 'New York'
";

$statement = $connection->prepare($query);
$success = $statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ); // from now on, fetch objects stdClass
$all_results = $statement->fetchAll();

var_dump($all_results);

// echo $success ? "Y" : "N"; 