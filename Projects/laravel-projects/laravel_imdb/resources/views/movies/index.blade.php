<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($movies as $movie)

        <li>
            <h2>{{ $movie->name }}</h2>
        </li>
    </ul>
    

    @endforeach
</body>
</html>