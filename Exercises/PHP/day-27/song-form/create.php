<?php

require_once './DBBlackbox.php';
require_once 'Song.php';
// display a form to create a new song

// prepare empty data
$song = new Song;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new song</title>
</head>
<body>

<form action="store.php" method="POST">
    <label for="title">Title</label>
    <input type="text" 
    name="title" 
    id=""
    value='<?= $song->title ?>'>


    <label for="author_name">Author</label>
    <input type="text" 
    name="author_name" 
    id=""
    value='<?= $song->author_name ?>'>


    <label for="genre">Genre</label>
    <input type="text" 
    name="genre" 
    id=""
    value='<?= $song->genre ?>'>

    <button type="submit">Submit</button>



</form>
    



</body>
</html>