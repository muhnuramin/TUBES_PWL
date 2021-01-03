<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_costumer extends Model
{
    protected $table = "users_customer";

    protected $primaryKey = "id";
    protected $fillable = ['nama', 'alamat', 'phone', 'email', 'jml_kamar','tgl_pesan','lama_pesan'];
    protected $timestamp = true;

}
