<?php


// display a form to edit an existing song

require_once './DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';

$session = Session::instance();
var_dump($session);

function sendMessage()
{
    $session = Session::instance();
    var_dump($session);
}

sendMessage();
sendMessage();
sendMessage();
sendMessage();


// get id of the song to edit from the url
$id = $_GET['id'];



//prepare data about an existing song
$song = find($id, 'song');



// display the form (prefilled with the data about the existing song)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit a song</title>
</head>
<body>
    
</body>
</html>