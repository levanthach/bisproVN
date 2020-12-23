<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    public function pricelist(){
        return $this->hasMany('App\Models\PriceList', 'category_id', 'id');
    }
}
