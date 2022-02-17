<?php

require_once './DB.php';
require_once './DB_functions.php';
require_once './Country.php';
require_once './Region.php';

$success = connect('localhost', 'world', 'root', '');

// $query = "
//     INSERT INTO `regions`
//     (`name`, `slug`)
//     VALUES (?, ?)
   
// ";

// $countOfNewRecords = insert($query, ['Eastern Europe' ,'eastern-europe']);


// echo $countOfNewRecords;

$region = new Region;
$region->name = 'Central Africa';
$region->slug = 'Central Europe';
$region->insert();