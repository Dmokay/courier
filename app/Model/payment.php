<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
     protected $fillable = ['name', 'phone_no', 'account_no', 'trans_code', 'amount', 'processed', 'remarks'];
}
