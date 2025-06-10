<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);

    }

    public function index2()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index2',['pegawai' => $pegawai]);

    }

    public function index3()
    {
    	// mengambil data dari table pegawai
    	$penghapus = DB::table('penghapus')->paginate(10);

    	// mengirim data penghapus ke view index
    	return view('index3',['penghapus' => $penghapus]);

    }

}
