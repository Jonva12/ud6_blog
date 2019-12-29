<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $date = ['published_at'];

    protected $table = 'posts';

    public function user()    
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
