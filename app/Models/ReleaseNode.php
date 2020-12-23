<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReleaseNode extends Model
{
    protected $table = 'release_node';

    public function node(){
        return $this->belongsTo('App\Models\Node', 'node_id', 'id');
    }
}
