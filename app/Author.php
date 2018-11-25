<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
    	'name','country','date_of_birth'
    ];

    protected $hidden  = [
    	'created_at', 'updated_at'
    ];

    public function books() {
    	return $this->hasMany('App\Book','author_id');
    }
}
