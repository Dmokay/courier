<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $fillable = ['order_id', 'amount', 'balance', 'settled'];
}
