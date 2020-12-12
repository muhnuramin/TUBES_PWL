<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function home()
    {
        return view('dashboard');
    }

    public function manageuser()
    {
        $users = \App\user_consumer::paginate(3);
        return view('manageusers',[
            'users' => $users,
        ]);
    }

    public function managerooms()
    {
        $rooms = \App\hotels::paginate(3);
        return view('managerooms',[
            'rooms' => $rooms,
        ]);
    }
}
