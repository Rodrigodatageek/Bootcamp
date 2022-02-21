<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="color: rgb(39, 163, 163)">
    <h1> Welcome to the IMDB top 50 movies</h1>
    <h2> made in Laravel</h2>
    <ol>
        <?php foreach ($top_movies as $movie): ?>
        <li>
            <?= $movie->name ?>
        </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>