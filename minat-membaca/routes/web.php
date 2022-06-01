<?php

use Illuminate\Support\Facades\Route;
use App\Controller\IndikatorController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\KuisionerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/beranda', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/kuisioner', [KuisionerController::class, 'index']);
Route::post('/kuisioner', [KuisionerController::class, 'store']);

Route::get('/perhitungan', [PerhitunganController::class, 'index']);
Route::get('/hasil', [HasilController::class, 'index']);