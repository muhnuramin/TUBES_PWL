<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    protected $table = "rooms";

    protected $primaryKey = "id";

    protected $fillable = ['name', 'price', 'room_left', 'picture'];
    public $timestamps = true;
}
