<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  protected $fillable = ['value','type','carrency_id','product_id'];

  public function product(){
      return $this->belongsTo(\App\Models\Product::class);
  }
  
  public function currency(){
      return $this->belongsTo(\App\Models\Currency::class);
  }

}
