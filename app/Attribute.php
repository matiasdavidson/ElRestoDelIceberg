<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
  public $guarded = [];

    //
    public function products(){
      return $this->belongsToMany('\App\Product');
}
}
