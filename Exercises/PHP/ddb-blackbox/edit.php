<?php
require "./DBBlackbox.php";

session_start();


$toEdit = $_SESSION['toedit'];
var_dump($toEdit);
?>

<form action="data.php" method="POST">
    <input type="text" name = "Title" value="<?php isset($toEdit) ?? $toEdit['text'] ?>" >
    <input type="number" name = "Year of release">
    <input type="number" name = "Ratyting">
    <button type="text" >Submit form</button>

</form>





<!-- 
title (short text)
year of release (number)
genre (selected from list)
is_released (boolean)
plot (long text)
rating (number) -->