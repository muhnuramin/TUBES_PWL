<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function index()
    {
        $userscust = \App\user_costumer::orderBy('created_at','ASC')
                        ->paginate(5);
        return view('pesanan',[
            'userscust' => $userscust,
        ]);
    }
    // public functionj
}
