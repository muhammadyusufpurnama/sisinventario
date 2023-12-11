<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table karyawan
		//$karyawan = DB::table('karyawan')->get();
        $karyawan = DB::table('karyawan')->get();

    	// mengirim data karyawan ke view index
		return view('indexdd',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{
		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// Check if kodekaryawan already exists
    $existingkodekaryawan = DB::table('karyawan')->where('kodepegawai', $request->kode)->first();

    if ($existingkodekaryawan) {
        return redirect('/karyawan/tambah')->withErrors(['error' => ' kodepegawai SUDAH ADA di tabel']);
    }

        if ($existingkodekaryawan) {
            return redirect('karyawan/tambah');
        }
		// insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman awal
		return redirect('/indexdd');

	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

    function nestedLowercase($value) {
        if (is_array($value)) {
            return array_map('nestedLowercase', $value);
        }
        return strtolower($value);
    }
}
