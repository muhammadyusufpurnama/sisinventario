<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MouseController extends Controller
{
	public function index()
	{
    	// mengambil data dari table mouse
        $mouse = DB::table('mouse')->get();

    	// mengirim data mouse ke view index
		return view('indexmouse',['mouse' => $mouse]);

	}

	// method untuk menampilkan view form tambah mouse
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahmouse');

	}

	// method untuk insert data ke table mouse
	public function store(Request $request)
	{
		// insert data ke table mouse
		DB::table('mouse')->insert([
            'kodemouse' => $request->kode,
			'merkmouse' => $request->merk,
			'stockmouse' => $request->stock,
            'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman mouse
		return redirect('/mouse');

	}

	// method untuk edit data mouse
	public function edit($id)
	{
		// mengambil data mouse berdasarkan id yang dipilih
		$mouse = DB::table('mouse')->where('kodemouse',$id)->get();
		// passing data mouse yang didapat ke view edit.blade.php
		return view('editmouse',['mouse' => $mouse]);

	}

	// update data mouse
	public function update(Request $request)
	{
		// update data mouse
		DB::table('mouse')->where('kodemouse',$request->kode)->update([
            'kodemouse' => $request->kode,
			'merkmouse' => $request->merk,
			'stockmouse' => $request->stock,
            'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman mouse
		return redirect('/mouse');
	}

	// method untuk hapus data mouse
	public function hapus($id)
	{
		// menghapus data mouse berdasarkan id yang dipilih
		DB::table('mouse')->where('kodemouse',$id)->delete();

		// alihkan halaman ke halaman mouse
		return redirect('/mouse');
	}

    //method untuk cari data mouse
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table mouse sesuai pencarian data
		$mouse = DB::table('mouse')
		->where('merkmouse','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data mouse ke view index
		return view('indexmouse',['mouse' => $mouse, 'cari' => $cari]);

	}

    // method untuk view data mouse
	public function view($id)
	{
		// mengambil data mouse berdasarkan id yang dipilih
		$mouse = DB::table('mouse')->where('kodemouse',$id)->get();
		// passing data mouse yang didapat ke view edit.blade.php
		return view('viewmouse',['mouse' => $mouse]);

	}
}
