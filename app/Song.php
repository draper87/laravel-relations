<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  protected $fillable = [
    'title',
    'genre',
    'albums_id',

  ];

  public function album() {
    return $this->belongsTo('App\Models\Album');
  }
}
