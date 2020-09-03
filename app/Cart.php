<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
  public $guarded = [];

    //
    public function products(){
      return $this->belongsToMany('\App\Product');
    }

    public function payment(){
      return $this->belongsTo('App\Payment', 'payment_id');
    }
    public function user(){
      return $this->belongsTo('App\User', 'user_id' );
    }
}
