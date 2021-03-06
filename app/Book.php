<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    	'title','sinopsis','published_in','img','author_id'
    ];

    protected $hidden  = [
    	'created_at', 'updated_at','author_id'
    ];

    public function author() {
    	return $this->belongsTo('App\Author','author_id');
    }

  
}
