<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TryItProduct extends Model
{
    const product = 0;
    const service = 1;

    protected $table = 'try_it_products';
}
