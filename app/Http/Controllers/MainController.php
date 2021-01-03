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
        // $rooms = Cache::remember('rooms', 60, function(){
        //     return \App\hotels::all();
        // });
        $rooms = \App\hotels::paginate(4);
        $testimonials = \App\testimonial::all();

        return view('home1',[
            'rooms' => $rooms,
            'testimonials' => $testimonials,
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
        Session::put('room',$id);
        $room_type = $id;
        return view('datadiri',[
            'rooms' => $rooms,
            'room_type' =>$room_type,
        ]);
    }
    public function bookingcreate(Request $request){

        $room = \App\hotels::where('tipe','=',$request->get('type_room_hidden'))
                            ->first();

        // dd($room->id);
        // die();

        $new_data = new \App\user_costumer();
        $email_exist = \App\user_costumer::where('email','=',$request->get('email'))->first();
        $phone_exist = \App\user_costumer::where('phone','=',$request->get('phone'))->first();
        $new_data->nama = $request->get('nama');
        $new_data->alamat = $request->get('alamat');
        $new_data->phone = $request->get('phone');
        $new_data->email = $request->get('email');
        $new_data->jml_kamar = $request->get('jml_kamar');
        $new_data->tgl_pesan = $request->get('tgl_pesan');
        $new_data->lama_pesan = $request->get('lama_pesan');
        $new_data->type_room = $room->id;

        if (($email_exist) || ($phone_exist)){
            return redirect()->route('home')->with(['error'=>'Email / No Telepon sudah digunakan, mohon gunakan email lain.']);
        } else {
            $new_data->save();
            // return redirect('home')->with('status','Data berhasil ditambahkan');
            return redirect('testimoni');
        }

    }

}
