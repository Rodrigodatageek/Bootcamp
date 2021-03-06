@extends('admin-layout')

@section('content')

{{-- if author has been saved before (its `id` is not empty) --}}
@if ($author->id)

    <h1>{{ $author->name }} - edit author</h1>

    <form action="{{ route('author.update', $author->id) }}" method="post">
        @method('PUT')

@else

    <h1>Create a new author</h1>

    <form action="{{ route('author.store') }}" method="post">

@endif

    @csrf

    <div class="form-group">
        <label for="">Slug</label><br>
        <input
            type="text"
            name="slug"
            value="{{ old('slug', $author->slug) }}"
        >
    </div>

    <div class="form-group">
        <label for="">Name</label><br>
        <input
            type="text"
            name="name"
            value="{{ old('name', $author->name) }}"
        >
    </div>

    <div class="form-group">
        <label for="">Biography</label><br>
        <textarea
            name="bio"
        >{{ old('bio', $author->bio) }}</textarea>
    </div>

    <div class="form-group">
        <button>Save</button>
    </div>

</form>

@endsection