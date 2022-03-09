@extends('../layouts/default')

@section('content')

    <h1> Welcome to the IMDB website</h1>
    <h2> made in Laravel</h2>
    @include('../includes/header')

    <ul>
        <?php foreach ($top_movies as $movie): ?>
        <li>
            <?= $movie->name ?>
        </li>
       
        <?php endforeach; ?>
    </ul>

