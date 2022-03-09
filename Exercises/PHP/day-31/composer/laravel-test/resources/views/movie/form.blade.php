@extends('../layouts/default')

@section('content')

<h1>Register new Movie</h1>
<form action="{{ action('MovieController@store') }}" method="post">
     @csrf
    <label>
        Title:
    </label>
    <input type="text" name="name" required>

    <label>
        Year:
    </label>
        <input type="number" name="year" required>
    


    <input type="submit" value="Save">
</form>

@endsection