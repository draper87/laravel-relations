<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
  protected $fillable = [
    'cover',
    'album_id',

  ];

  public function album() {
    return $this->belongsTo('App\Album');
  }
}
