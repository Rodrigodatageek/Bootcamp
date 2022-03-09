<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MovieType extends Model
{
    use HasFactory;

    public function movies()
    {
        return $this->HasMany(Movie::class);
    }
}
