<?php

try {
    $connection = new POD(
        'mysql:dbname=world;host=localhost;charset=utf8',
        'root', // username
        '' // password

    );
} catch (PODException $e) {
    echo 'Connection faliled ' . $e->getMessage();
    exit(); // if there is an error, stop execution 

}

