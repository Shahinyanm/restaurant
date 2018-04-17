<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'content'];


    public function catalog()
    {
        return $this->belongsTo('App\Catalog','catalog_id');

    }
}
