<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','quantity','category_id'];

    public function tags(){
        return $this->belongsToMany(\App\Models\Tag::class);
    }
}
