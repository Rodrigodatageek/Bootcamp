<?php

// Building an array
// Declare an empty array in a variable $students

// Add the string 'Thomas' to it as the next numerically indexed element.

// Add the string 'Kathy' to it as the next numerically indexed element.

// Add the string 'Eve' to it as the next numerically indexed element.

// Add the string 'Bernard' to it as the next numerically indexed element.


$students = [];

array_push($students, "Thomas", "Kathy", "Eve", "Bernard");
// var_dump($students);


// Foreach loop #1
// Write a foreach loop that will loop through the array $students and echo each element (you can combine it with some HTML for nicer output)

// foreach ($students as $value) {
// echo $value;
// }



// Building an array #2
// Declare an empty array in a variable $divisible_by_seven

// Write a for loop that will loop through numbers 0 to 100

// Whenever the current number is divisible by 7, add the number to the array $divisible_by_seven as the next numerically indexed element.

$divisible_by_seven = [];

for($value=1; $value<=100; $value++)
{
    if ($value%7 === 0) {
        array_push($divisible_by_seven,$value);
    }
    
}


// Foreach loop #2
// Write a foreach loop that will loop through the array $divisible_by_seven and echo each element (you can combine it with some HTML for nicer output)

foreach($divisible_by_seven as $value)
{
    echo "<ul>" . "<li>" . $value . " " . "</li>" . "</ul>";
    
}


