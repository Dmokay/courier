<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
     protected $fillable = ['product_id', 'customer_id', 'from', 'to', 'description', 'stage'];
}
