<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  
  static const STANDART = 1;
  static const DISCOUNT = 2;
  static const CREDIT   = 3;
  
  protected $fillable = ['value','type','currency_id','product_id'];

  public function product(){
      return $this->belongsTo(\App\Models\Product::class);
  }
  
  public function currency(){
      return $this->belongsTo(\App\Models\Currency::class);
  }

}
