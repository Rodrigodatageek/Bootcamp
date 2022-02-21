<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function helloWorld()
    {
        return ['foo'=>'bar','Rodrigo'=>'Run'];
        

    }

    public function helloLaravel()
    {


        $people = [
            'John',
            'Jill',
            'Jack',
            'Rodrigo'
        ];
        // resources / views / sample-pages /hello-laravel.blade
        return view(
            'sample-pages/hello-laravel', 
            [
                'whom_to_greet' => 'John' ,
                'people_to_greet' => $people
        ]);

        

    }
}
