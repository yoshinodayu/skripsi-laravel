<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keterangan;
use App\Models\Contoh1;
use App\Models\Contoh2;
use App\Models\CentroidAcak;
use App\Models\CentroidBaru;
use App\Models\Iterasi1;
use App\Models\Iterasi2;

class PerhitunganController extends Controller
{
    public function index() {
        return view('perhitungan', [
            "title" => "Perhitungan",
            "keterangans" => Keterangan::all(),
            "contoh1s" => Contoh1::all(),
            "contoh2s" => Contoh2::all(),
            "centroid_acaks" => CentroidAcak::all(),
            "centroid_barus" => CentroidBaru::all(),
            "iterasi1s" => Iterasi1::all(),
            "iterasi2s" => Iterasi2::all(),
        ]);
    }
}
