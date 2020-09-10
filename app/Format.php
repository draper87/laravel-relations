<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $fillable = [
      'format'
    ];

    public function albums() {
    return $this->belongsToMany('App\Album');
    }
}
