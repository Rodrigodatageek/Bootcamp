<?php

require_once 'Author.php';

$Cazuza = new Author;
$Cazuza->name = 'Cazuza castro';
$Cazuza->styles = [
    'pop',
    'rock'
];
$Cazuza->country = 'UK';
$Cazuza->image_url = "https://upload.wikimedia.org/wikipedia/commons/8/85/John_Lennon_1969_%28cropped%29.jpg";


var_dump($Cazuza);


// Author - usage
// Within index.php, after the class is required (but before view.php is included), create a new object of the class Author.

// Using its properties and methods, fill it with appropriate data. Choose any musician that you like. For the image, find and use a URL to an image that is available somewhere online (e.g. https://upload.wikimedia.org/wikipedia/commons/8/85/John_Lennon_1969_%28cropped%29.jpg).

// TIP: you can use the built-in function var_dump to take a look at the author object as you are working with it.


// $player = new AudioPlayer;
// $player->song = 'Like a rolling stone';
// $player->playSong();




include 'view.php';