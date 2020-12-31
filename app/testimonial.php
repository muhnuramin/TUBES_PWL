<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    protected $table = "testimonials";

    protected $primaryKey = "id";
    protected $fillable = ['Nama', 'Nilai', 'testi'];
}
