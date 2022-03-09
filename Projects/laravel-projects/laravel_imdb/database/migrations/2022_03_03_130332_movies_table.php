<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_type_id');
            $table->unsignedBigInteger('movie_status_id');
            $table->string('name');
            $table->integer('length');
            $table->year('year');
            $table->year('start_year');
            $table->year('end_year');
            $table->float('rating');
            $table->integer('votes_nr');
            $table->integer('metascore');
            $table->unsignedBigInteger('certification_id');
            $table->unsignedBigInteger('budget');
            $table->string('budget_currency');
            $table->string('color_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};


// The table should have these columns:

// id PK, unsigned big integer, AI
// movie_type_id unsigned big integer
// movie_status_id unsigned big integer
// name string
// length integer
// year year
// start_year year
// end_year year
// rating float
// votes_nr integer
// metascore integer
// certification_id unsigned big integer
// budget unsigned big integer
// budget_currency string
// color_code string
// Then run the migration.