<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
  protected $fillable = ['name','currency_code'];

  public function prices(){
      return $this->hasMany(\App\Models\Price::class);
   }
}
