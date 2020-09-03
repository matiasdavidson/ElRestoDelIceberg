<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
  public $guarded = [];

    //
public function carts(){
return $this->hasMany("App\cart", "cart_id");
}

}
