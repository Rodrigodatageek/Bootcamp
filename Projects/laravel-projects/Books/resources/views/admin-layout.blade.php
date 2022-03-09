<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration | Books Project</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    <nav>
        @if (Gate::allows('admin'))
            <a href="{{ route('author.index') }}">List of authors</a>
            <a href="{{ action('Admin\AuthorController@create') }}">Create an author</a>
        @endif

        @can('role', 'editor')
            <a href="{{ route('publisher.index') }}">List of publishers</a>
            <a href="{{ action('Admin\PublisherController@create') }}">Create a publisher</a>
        @endcan

        @auth

            <form action="{{ route('logout') }}" method="post">

                @csrf

                <button>Logout</button>

            </form>

        @endauth

        @guest

            <a href="{{ route('login') }}">Login</a>

        @endguest

    </nav>

    {{-- @include('components.alerts') --}}

    @yield('content')

</body>
</html>