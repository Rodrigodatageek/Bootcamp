<?php

require_once 'Region.php';
require_once 'DB_functions';
require_once 'DB.php';

//prepare empty data
$region = new Region;

//fill it from request
$region->name = $_POST['name'];
$region->slug = $_POST['slug'];

// save the data
$newly_inserted_id = insert($Region);