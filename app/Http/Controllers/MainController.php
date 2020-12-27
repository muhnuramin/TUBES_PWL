<?php

namespace App\Http\Controllers;
use Cache;
use Session;
use Illuminate\Http\Request;
date_default_timezone_set('Asia/Jakarta');
class MainController extends Controller
{
    public function home()
    {
        $rooms = Cache::remember('rooms', 60, function(){
            return \App\hotels::all();
        });
        $rooms = \App\hotels::paginate(4);
        return view('home1',[
            'rooms' => $rooms,
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function testimoni()
    {
        return view('testimoni');
    }
    public function booking()
    {
        $rooms = \App\hotels::paginate(4);
        return view('booking',[
            'rooms' => $rooms,
        ]);
    }

    public function datadiri(){
        return view('datadiri');
    }

    public function reservasi($id){
        $rooms = \App\hotels::where('id','=',$id)->find($id);
        Session::put('room',$rooms);
        return view('datadiri',[
            'rooms' => $rooms,
        ]);
    }
    public function bookingcreate(Request $request){

        \App\user_costumer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'email' => $request->email,
            'jml_kamar' => $request->jml_kamar,
        ]);
        return redirect('home')->with('status','data berhasil ditambahkan');
    }

}
