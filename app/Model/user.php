<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = ['name', 'email', 'email_verified_at', 'password', 'id_no', 'phone_no', 'role'];
}
