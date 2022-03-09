<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::query()
            ->orderBy('name', 'asc')
            ->limit(50)
            ->get();

        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        $author = new Author;

        return view('authors.edit', compact('author'));
    }
}
