<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieType;
use App\Models\Person;
use Illuminate\Database\DBAL\TimestampType;

class Movie extends Model
{
    use HasFactory;


    public $timestamps =false;

    public function type()
    {
        return $this->belongsTo(MovieType::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class);
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class);
    }

    
}
