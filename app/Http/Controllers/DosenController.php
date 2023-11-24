<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return "<h2>Halo ini adalah method index, dalam controller DosenController</h2>";
    }

    public function biodata(){
        //biasanya ada logika pemrogramannya
        $nama = "Muhammad Yusuf Purnama" ;
        $alamat = "Gresik" ;
        $umur = 19 ;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama,'alamat' => $alamat,'umur' => $umur,'matkul' => $pelajaran]);
    }

    public function showjam($jam){
    	return "<h3> sekarang jam  $jam <h3>";
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request -> input('nrp');
        return "Anda telah mengisikan <br> Nama : ".$nama.", Alamat : ".$alamat. "NRP : " .$nrp.
        "<br>Isi asli class request" .$request;
    }

    public function formulir(){
        return view('formulir');
    }

    public function home(){
		return view('home');
	}

	public function tentang(){
		return view('tentang');
	}

	public function kontak(){
		return view('kontak');
	}
}
