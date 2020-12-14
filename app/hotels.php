<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    protected $table = "rooms";

    protected $primaryKey = "id";

    protected $fillable = ['tipe', 'price', 'room_left', 'picture', 'fasilitas'];
    public $timestamps = true;
}
