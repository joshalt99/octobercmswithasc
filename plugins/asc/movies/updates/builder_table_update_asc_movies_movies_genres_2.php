<?php namespace Asc\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAscMoviesMoviesGenres2 extends Migration
{
    public function up()
    {
        Schema::table('asc_movies_movies_genres', function($table)
        {
            $table->dropPrimary(['movie_id','ganres_id']);
            $table->renameColumn('ganres_id', 'ganre_id');
            $table->primary(['movie_id','ganre_id']);
        });
    }
    
    public function down()
    {
        Schema::table('asc_movies_movies_genres', function($table)
        {
            $table->dropPrimary(['movie_id','ganre_id']);
            $table->renameColumn('ganre_id', 'ganres_id');
            $table->primary(['movie_id','ganres_id']);
        });
    }
}
