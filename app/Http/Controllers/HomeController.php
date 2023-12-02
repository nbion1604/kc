<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Apotik;
use App\Gejala;
use App\Kontak;
use App\Pasien;
use App\Penyakit;
use App\Solusi;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Socket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/konsultasi');
    }
    public function admin()
    {
        $penyakit = Penyakit::count();
        $gejala = Gejala::count();
        $solusi = Solusi::count();
        $user = User::count();
        return view('admin-home', compact('penyakit','gejala','solusi','user'));
    }

    public function spesialis(){
        return view('spesialis');

    }


    public function home()
    {
        $edit = User::all();

        return view('layouts.master', compact('edit'));
    }
    public function editPasien($id)
    {
         // mengambil data pegawai berdasarkan id yang dipilih
		$edit = FacadesDB::table('Users')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
        return view('seting-password',compact('edit'));

        // $user = User::find($id);
        // return view('seting-password',compact('user'));
    }



    
    public function updatePasien(Request $request, $id)
    {
        $user = User::find($id);
        if($request->input('password')){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =bcrypt($request->password);
        }
        else{
                $user->name = $request->name;
                $user->email = $request->email;
                $user->level = $request->level;
            }
        $user->update();
        return redirect('/home');
    }


    #kontak
    public function Kontak()
    {
        $api = Kontak::all();
        return view('layouts.user',compact('api'));
    }




}
