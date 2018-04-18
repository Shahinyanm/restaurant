<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description','price','weight','photo','status','recomend','status'];


    public function catalog()
    {
        return $this->belongsTo('App\Catalog');

    }
}
