<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
	 protected $fillable = ['name', 'status'];

    public function products()
    {
        return $this->hasMany('App\Product','catalog_id');

    }
}
