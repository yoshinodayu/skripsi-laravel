<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use App\Models\Jawaban;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    public function index() {
        return view('kuisioner', [
            "title" => "Kuisioner",
            "jawabans" => Jawaban::all(),
        ]);
    }

    public function input() {
        return view('kuisioner');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'usia' => 'required',
            'status' => 'required',
            'instansi' => 'required',
            'p1' => 'required',
            'p2' => 'required',
            'p3' => 'required',
            'p4' => 'required',
            'p5' => 'required',
            'p6' => 'required',
            'p7' => 'required',
            'p8' => 'required',
            'p9' => 'required',
            'p10' => 'required',
            'p11' => 'required',
            'p12' => 'required',
            'p13' => 'required',
            'p14' => 'required',
            'p15' => 'required',
            'p16' => 'required',
            'p17' => 'required',
            'p18' => 'required',
            'topik_berita' => 'required',
        ]);
        Kuisioner::create([
            'nama_lengkap' => $request->nama_lengkap,
            'usia' => $request->usia,
            'status' => $request->status,
            'instansi' => $request->instansi,
            'p1' => $request->p1,
            'p2' => $request->p2,
            'p3' => $request->p3,
            'p4' => $request->p4,
            'p5' => $request->p5,
            'p6' => $request->p6,
            'p7' => $request->p7,
            'p8' => $request->p8,
            'p9' => $request->p9,
            'p10' => $request->p10,
            'p11' => $request->p11,
            'p12' => $request->p12,
            'p13' => $request->p13,
            'p14' => $request->p14,
            'p15' => $request->p15,
            'p16' => $request->p16,
            'p17' => $request->p17,
            'p18' => $request->p18,
            'topik_berita' => implode(',' , $request->topik_berita),
        ]);
    }
}

?>