<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
   protected $fillable = ['name', 'code', 'status', 'remarks'];
}
