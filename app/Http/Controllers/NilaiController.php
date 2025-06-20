<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function eas()
    {
        $nilai = DB::table('nilai')->paginate(10);

        return view('eas', ['nilai' => $nilai]);
    }

    public function tambah()
    {
        return view('tambahnilai');
    }

    public function nilaistore(Request $request)
    {
        DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nrp,
            'nilaiangka' => $request->nilai,
            'sks' => $request->sks,
        ]);
        return redirect('/eas');
    }

}
