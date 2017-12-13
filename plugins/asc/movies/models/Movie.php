<?php namespace Asc\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'asc_movies_';



    /* Relations */

    public $belongsToMany =[
        'genres' =>[
            'Asc\Movies\Models\Genre',
            'table' => 'asc_movies_movies_genres',
            'order' => 'genre_title'
        ]
    ];


    public $attachOne = [

        'poster' => 'System\Models\File'

    ];

    public $attachMany = [

        'movie_gallery' => 'System\Models\File'

    ];
}
