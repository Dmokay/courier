<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
      protected $fillable = ['type', 'price', 'created_by', 'status', 'remarks'];
}
