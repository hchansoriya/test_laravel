<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // The attributes that aren't mass assignable.
    protected $guarded = [''];
}
