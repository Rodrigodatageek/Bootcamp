<?php

require_once './DB.php';
require_once './DB_functions.php';
require_once './Country.php';


$success = connect('localhost', 'world', 'root', '');


$query = "
SELECT *
FROM `cities`
LEFT JOIN `countries`
ON `cities` . `country_id` = `countries` . `id`
WHERE `cities` . `population` > ?
ORDER BY `cities` . `name`
";
   
$listOfResults = DB::select($query, [5000000]);

// echo '<pre>';
// var_export($listOfResults);
// echo '</pre>';





