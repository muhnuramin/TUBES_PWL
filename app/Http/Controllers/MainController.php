<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
date_default_timezone_set('Asia/Jakarta');
class MainController extends Controller
{
    public function home()
    {

        $rooms = \App\hotels::paginate(4);
        return view('home1',[
            'rooms' => $rooms,
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function booking()
    {
        return view('booking');
    }
}
