<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController extends Controller
{
    //di sini isi controller keranjang belanja

    public function index()
	{
    	// mengambil data dari table keranjangbelanja
		//$keranjangbelanja = DB::table('keranjangbelanja')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data keranjangbelanja ke view index
		return view('indexbaru',['keranjangbelanja' => $keranjangbelanja]);

	}

    // method untuk menampilkan view form beli keranjangbelanja
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

    // method untuk batal data keranjangbelanja
	public function batal($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

    public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
            'ID' => $request->id,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');

	}
}
