<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  protected $fillable = ['value','type','carrency_id','product_id'];

  public function product(){
      return $this->hasMany(\App\Models\Product::class);
    }
}
