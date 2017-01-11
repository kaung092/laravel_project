<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $fillable = ['index', 'id','url','ip','item_type','item_id','created_at'];
}

?>
