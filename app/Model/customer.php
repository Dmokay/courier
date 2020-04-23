<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['name', 'id_no', 'phone_no', 'status'];
}
