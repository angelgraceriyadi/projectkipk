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

Route::get('/', function () {
    return view('beranda');
});
Route::get('aset', function () {
    return view('doc/aset');
});
Route::get('biodata', function () {
    return view('doc/biodata');
});
Route::get('dokumen', function () {
    return view('doc/dokumen');
});
Route::get('keluarga', function () {
    return view('doc/keluarga');
});
Route::get('prestasi', function () {
    return view('doc/prestasi');
});
Route::get('tes', function () {
    return view('ayiktes');
});


Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
