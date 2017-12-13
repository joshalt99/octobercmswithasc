<?php namespace Asc\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAscMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('asc_movies_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('ganre_id');
            $table->primary(['movie_id','ganre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('asc_movies_movies_genres');
    }
}
