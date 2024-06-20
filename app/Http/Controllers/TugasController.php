<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $tugas = DB::table('tugas')->paginate(15);

    	// mengirim data pegawai ke view index
		return view('welcome',['tugas' => $tugas]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('tugas')->insert([
			'tugas_nama' => $request->nama
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$tugas = DB::table('tugas')->where('tugas_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['tugas' => $tugas]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('tugas')->where('tugas_id',$request->id)->update([
			'tugas_nama' => $request->nama,
		]);

        $tugas = DB::table('tugas')->where('tugas_id',$request->id)->get();

        // alihkan halaman ke halaman pegawai
		return view('view',['pegawai' => $pegawai]);
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('tugas')->where('tugas_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/');
	}

    public function view($id){
        // mengambil data pegawai berdasarkan id yang dipilih
		$tugas = DB::table('tugas')->where('tugas_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('view',['tugas' => $tugas]);
    }

    /*public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('Pweb Materi.index',['pegawai' => $pegawai, 'cari' => $cari]);

	}

    public function view($id){
        // mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('Pweb Materi.view',['pegawai' => $pegawai]);
    }*/
}
