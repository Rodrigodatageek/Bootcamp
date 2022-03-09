@extends('../layouts/default')



@section('content')

<h1>{{$movie->name}}</h1>

<p> year: {{$movie->year}} </p>

<li>
    actors 
    @foreach ($movie->people as $person)
    {{$person->fullname}}
        
    @endforeach
</li>

<form action="{{action('MovieController@delete', ['id' => $movie->id])}}" method="post">
    @csrf 
    @method('DELETE')
    
    <input type="submit" value="Delete">
</form>
@endsection