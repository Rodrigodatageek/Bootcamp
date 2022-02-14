<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- Declare these variables and initialize them with values:

first_name - holds your first name
surname - holds your surname
Now print them out in the following way: -->

<!-- <?php
$first_name = 'Rodrigo';
$last_name = 'Fernandes';
?>

<?php
echo "First name: {$first_name} <br>
Surname: {$last_name}";
?> -->


<!-- ------------------------------------------------------------------- -->


<!-- Declare these variables and initialize them with values:

year_of_birth - holds the year of your birth
height - holds your height (cm or in, does not matter) -->

<!-- <?php 
$year_of_birth = 1980;
$height = 174
?>

<?php echo "Year of birth: {$year_of_birth}<br>
  Height: {$height} cm"?> -->



<!-- ------------------------------------------------------------------- -->

<!-- Define a constant SERVER_SOFTWARE with the name of your server software ('Apache').

Then use it in a sentence to print text like:

This server is running on Apache. -->
<!-- <?PHP 
define("SERVER_SOFTWARE", "Apache");

echo "This server is running on " . SERVER_SOFTWARE;
?> -->

<!-- ------------------------------------------------------------------ -->


<!-- Define a constant MY_OS with the name of your operating system (e.g. 'Windows').

Then use it in a sentence to print text like:

My operating system is Windows. -->

<!-- <?php
define("MY_OS", "MacOs");

echo "My operatin system is: " . MY_OS;
?> -->

<!-- ------------------------------------------------------------------ -->

<!-- Declare a function greet_world that will take no arguments and just print out (echo) the greeting Hello, world!

Call the function to see the text. -->


<!-- <?php 
function greet_world() {
    echo "Hellow, world!";
}

echo greet_world()
?> -->

<!-- ------------------------------------------------------------------ -->

<!-- Declare a function greet that will accept one argument named $whom and use its value to decide whom to greet.

For example, calling greet('Prague') should print (echo) Hello, Prague!

Call the function twice with different arguments. -->


<!-- <?php 

function greet($whom) {
    echo " Hello, {$whom}!";
}
 ?>
<?php
greet(" Rodrigo");

greet(" Daniel");
?> -->

<!-- ----------------------------------------------------------------- -->


<!-- Declare a function greeting that will accept one argument named $whom and use its value to decide whom to greet.

It will be similar to the function greet, but this one will return the resulting string instead of printing it.

To see the return value you have to call the function and print (echo) its return value. -->

<!-- 
<?php
function greeting($whom) {
    return "Hello, {$whom}!";

}
?>

<?php 
echo greeting("Rodrigo");
?> -->

<!-- ----------------------------------------------------------------- -->


<!-- The functions greet and greeting do the same operation of making a string from two parts!

While this is a very tiny piece of code, we still don't need to repeat ourselves.

Make the code more DRY by using the function greeting within the function greet. -->

<!-- <?php
function new_greet($whom) {
    echo "Hello, {$whom}! ";
    return "Hello, {$whom}!";
    

}
?>

<?php
echo new_greet("Rodrigo");
?> -->

    
</body>
</html>