<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class remark extends Model
{
     protected $fillable = ['name', 'code', 'status', 'remarks',];
}
