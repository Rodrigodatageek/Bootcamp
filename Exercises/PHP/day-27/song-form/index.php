<?php

// index of all songs in our database

require_once "./DBBlackbox.php";
require_once "Song.php";


$songs = select(null, null, 'Song');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>

<div class="songs-list">
    <?php

    foreach ($songs as $song);

    ?>

    

</div>
    
</body>
</html>