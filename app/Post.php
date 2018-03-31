<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key is changeable
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // Create a relationship with post to user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
