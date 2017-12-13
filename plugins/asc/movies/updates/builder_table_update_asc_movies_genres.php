<?php namespace Asc\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAscMoviesGenres extends Migration
{
    public function up()
    {
        Schema::table('asc_movies_genres', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('asc_movies_genres', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
