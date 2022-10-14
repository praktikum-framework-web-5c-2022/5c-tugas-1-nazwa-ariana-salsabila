<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect ('/','/dosen');
Route::get('/dosen', function(){
    $dosens = ["Purwantoro, M.Kom.","Arip Solehudin, M.Kom.","Intan Purnamasari, M.Kom.","Carudin, M.Kom.",
    "Iqbal Maulana, S.Si.,M.Sc.","M. Jajuli, M.Si.","Adhi Rizal, S.Pd., M.T.","Betha Nurina Sari, M.Kom.","Aji Primajaya, S.Si., M.Kom.","Rini Mayasari, M.Kom."];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Nazwa Ariana Salsabila","Risa Adelia","Nabila Aulia Rahmah","Radika Tripena Lubis","Natanael Berkat Sianturi","Nanda Sukarno Wijaya","Sopiatul Ulum",
    "Octavia Salwa","Afivah Yuazijah","Rifky Alfarezal"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Pemrograman Berbasis Mobile","Pemrograman Berbasis Web","Interaksi Manusia dan Komputer",
    "Aljabar Linear","Kalkulus","Basis Data","Jaringan Komputer","Metode Numerik","Kecerdasan Buatan","Pengantar Teknologi dan Informasi"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');
