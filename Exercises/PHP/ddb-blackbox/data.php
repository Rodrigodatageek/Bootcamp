<?php

require_once "./DBBlackbox.php";

// selects ALL the saved records and var_dumps them
//var_dump(select());

// if your entity's data is in $array_of_data
$id = insert($_POST);

/* var_dump(select());
 */
var_dump(find($id = 1));

session_start();
var_dump($_GET);

$_SESSION["toedit"]=find($id = 1);
var_dump($_SESSION)

?>