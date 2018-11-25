<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    	'title','sinopsis','published_in','img','author_id'
    ];
}
