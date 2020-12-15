<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_consumer extends Model
{
    protected $table = "users_employee";
    protected $primaryKey = "id";
    protected $fillable = ['email', 'name', 'password', 'profile', 'testimoni'];
    public $timestamps = true;
}
