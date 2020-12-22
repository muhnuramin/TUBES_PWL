<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function index()
    {
        return view('pesanan');
    }
    public function datadiri()
    {
        return view('datadiri');
    }
}
