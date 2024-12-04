<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamu'alaikum,Selamat Belajar Laravel PeTik Jombang Angkatam III";
});

//routing parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
 });

 //routing kondisi
 Route::get('/kabar', function () {
    return view('kondisi');
});


//routing Data Santri
Route::get('/santri',[SantriController::class, 'dataSantri']);
