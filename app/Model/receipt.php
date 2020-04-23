<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
     protected $fillable = ['amount', 'invoice_id'];
}
