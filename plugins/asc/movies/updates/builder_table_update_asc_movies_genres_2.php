<?php namespace Asc\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAscMoviesGenres2 extends Migration
{
    public function up()
    {
        Schema::rename('asc_movies_genre', 'asc_movies_genres');
    }
    
    public function down()
    {
        Schema::rename('asc_movies_genres', 'asc_movies_genre');
    }
}
