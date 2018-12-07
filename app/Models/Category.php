<?php
//

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//определяет какие поля можно добавлять массова
  protected $fillable = ['name','category_id'];



//RELATION
  public function product(){
    return $this->hasMany(\App\Models\Product::class);
  }


}
