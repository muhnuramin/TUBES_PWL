<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cache;
use PDF;
use Illuminate\Support\Facades\Hash;
class ManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if(Auth::Check()){
        }else{
            return redirect('login')->with('alert','login first');
        }
    }
    public function home()
    {
        return view('dashboard');
    }

    public function manageuser()
    {
        $users = \App\User::paginate(5);
        return view('manageuser1',[
            'users' => $users,
        ]);
    }

    public function manageuseradd(){
        $users = \App\User::All();
        return view('manageuser.adduser',[
            'users' => $users,
        ]);
    }
    public function manageroomsadd(){
        $rooms = \App\hotels::All();
        return view('managehotel.addroom',[
            'rooms' => $rooms
        ]);
    }
    public function manageusercreate(Request $request){
        if($request->file('image')){
            $image_name = $request->file('image')->store('image', 'public');
        }
        \App\User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' =>Hash::make($request->password),
            'profile' => $image_name,
        ]);
        return redirect('/manageuser')->with('status','data berhasil ditambahkan');
    }
    public function manageroomscreate(Request $request){
        if($request->file('image')){
            $image_name = $request->file('image')->store('image', 'public');
        }
        \App\hotels::create([
            'tipe' => $request->tipe,
            'price' => $request->price,
            'room_left' => $request->room_left,
            'fasilitas' => $request->fasilitas,
            'picture' => $image_name,
        ]);
        return redirect('/managehotel')->with('status','data berhasil ditambahkan');
    }

    public function testicreate(Request $request){
        \App\testimonial::create([
            'Nama' => $request->Nama,
            'Nilai' => $request->Nilai,
            'testi' => $request->testi
            ]);
            return redirect('/');
    }
    public function manageuseredit($id){
        $users = \App\User::find($id);
        return view('manageuser.edituser',[
            'users' => $users,
        ])->with('status','data berhasil diedit');
    }
    public function manageroomsedit($id){
        $rooms = \App\hotels::find($id);
        return view('managehotel.editroom',[
            'rooms' => $rooms,
        ])->with('status','data berhasil diedit');
    }
    public function manageuserupdate($id, Request $request){
        $users = \App\User::find($id);
        $users->email = $request->email;
        $users->name = $request->name;
        $users->password = $request->password;
        if($users->profile && file_exists(
            storage_path('app/public/' . $users->profile))){
                \Storage::delete('public/'.$users->profile);
            }
        $image_name = $request->file('image')->store('images', 'public');
        $users->profile = $image_name;
        $users->save();
        return redirect('/manageuser')->with('status','data berhasil diedit');
    }

    public function manageroomsupdate($id, Request $request){
        $rooms = \App\hotels::find($id);
        $rooms->tipe = $request->tipe;
        $rooms->price = $request->price;
        $rooms->room_left = $request->room_left;
        $rooms->fasilitas = $request->fasilitas;
        if($rooms->picture && file_exists(
            storage_path('app/public/' . $rooms->picture))){
                \Storage::delete('public/'.$rooms->picture);
            }
        $image_name = $request->file('image')->store('images', 'public');
        $rooms->picture = $image_name;
        $rooms->save();
        return redirect('/managehotel')->with('status','data berhasil diedit');
    }
    public function manageuserdelete($id){
        $users = \App\User::find($id);
        $users->delete();
        return redirect('/manageuser')->with('status','data berhasil dihapus');
    }
    public function manageroomsdelete($id){
        $rooms = \App\hotels::find($id);
        $rooms->delete();
        return redirect('/managehotel')->with('status','data berhasil dihapus');
    }
    public function managerooms()
    {
        $rooms = \App\hotels::paginate(3);
        return view('managerooms',[
            'rooms' => $rooms,
        ]);
    }
    public function cetak_user()
    {
        $page ="Laporan Data User";
        $users = \App\User::all();
        $pdf = PDF::loadview('pdfuser',
        [
            'users' => $users,
            'page' => $page,
        ]);
        return $pdf->stream();
    }
    public function cetak_rooms()
    {
        $page ="Laporan Data Kamar";
        $rooms = \App\hotels::all();
        $pdf = PDF::loadview('pdfrooms',
        [
            'rooms' => $rooms,
            'page' => $page,
        ]);
        return $pdf->stream();
    }
    public function cetak_pesanan()
    {
        $page ="Laporan Data Pesanan";
        $users_costumer = \App\user_costumer::all();
        $pdf = PDF::loadview('pdfpesanan',
        [
            'users_costumer' => $users_costumer,
            'page' => $page,
        ]);
        return $pdf->stream();
    }

    public function managetesti()
    {
        $testimonials = \App\testimonial::paginate(5);
        return view('managetestimoni',[
            'testimonials' => $testimonials,
        ]);
    }

    public function managetestidelete($id){
        $testimonials = \App\testimonial::find($id);
        $testimonials->delete();
        return redirect('/manage/testimoni')->with('status','data spam akan dihapus');
    }


}
