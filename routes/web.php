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
    $dosens = ["Tesa Nurpadilah, M.Kom..","Aji Primaya, M.Kom.","Kamal, M.Kom","Pur, M.Kom.","Adhi Rijal, M.Kom.",
    "Intan Purnamasari, M.Kom.","Mohamad Jajuli, M.Kom.","Susilawati sobur, M.Kom.","Asep Jamaludin, M.Si.","Chaca, S.Pd., M.T.","Siska, M.Sc.","Nanan Rochana, M.Pd."];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Tasya Nurpadilah","Salsabilla","Afiva Yuazija","Cintya Ana Tasya","Nanda Nuria","Widya Dwi","Yuliawati",
    "Octavia Salwa","Nur Fitriana ","Fachrunnisa", "Desca Saurina", "Salma Sajida"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Kalkulus","Framework web","Pemprograman web","Pemprograman Mobile",
    "Cloud Computing","Rekayas Perangkat Lunak","Statistika","Embedded System","Metode Numerik","Teori Bahasa Automata","PKN"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');