<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    //
    protected $table = 'price_lists';

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
