<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function index()
    {
        $userscust = \App\user_customer::paginate(5);
        return view('pesanan',[
            'userscust' => $userscust,
        ]);
    }
}
