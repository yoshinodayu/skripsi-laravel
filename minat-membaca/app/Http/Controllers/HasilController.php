<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Responden;
use App\Models\Responden2;
use App\Models\DataTesting;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index() {
        return view('hasil', [
            "title" => "Hasil",
            "respondens" => Responden::all(),
            "jawabans" => Jawaban::all(),
            "responden2s" => Responden2::all(),
            "data_testings" => DataTesting::all()
        ]);
    }
}

?>