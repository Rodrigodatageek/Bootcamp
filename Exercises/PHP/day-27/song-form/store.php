<?php


//handle the submission of create.php form
// store a new song into the database
require_once './DBBlackbox.php';
require_once 'Song.php';

$song = new Song;

// fill the data from request
$song->title = $_POST['title'] ?? $song->title;
$song->author_name = $_POST['author_name'] ?? $song->author_name;
$song->genre = $_POST['genre'] ?? $song->genre;


var_dump($song);



// save the data
insert($song);



// redirect
header('Location: create.php');