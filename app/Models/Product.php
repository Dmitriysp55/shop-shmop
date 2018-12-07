<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','quantity','category_id'];

    public function tag(){
        return $this->belongsToMany(\App\Tag);
    }
}
