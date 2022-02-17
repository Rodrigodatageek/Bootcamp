<?php

require_once './DB.php';
require_once './DB_functions.php';
require_once './Country.php';


$success = connect('localhost', 'world', 'root', '');






// echo '<pre>';
// var_export($result);
// echo '</pre>';

function get_cities($page_nr)
{
    $offset =($page_nr - 1) * 20; 

    $query = "
    SELECT `cities`.*
    FROM `cities`
    ORDER BY `population` DESC
    LIMIT {$offset}, 20
";
    return select($query);

}
echo '<pre>';
var_export(get_cities(10));
echo '</pre>';





