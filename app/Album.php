<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $fillable = [
    'title',
    'artist',
    'year'
  ];

  public function songs() {
    return $this->hasMany('App\Song');
  }

  public function covers() {
    return $this->hasOne('App\Cover');
  }

  public function formats() {
  return $this->belongsToMany('App\Format');
  }

}
