<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
    
    public function getRouteKeyName()
    {
        return 'url';
    }
}
