<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	// The attributes that aren't mass assignable.
    protected $guarded = [''];

    // Relationship with comments
    // retuen array()
    
    public function comments()
    {
    	return $this->hasMany('App\Comment'); 
    }
}
