<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('matakuliah', function () {
    return view('admin.matakuliah');
});

Route::get('mahasiswa', function () {
    return view('admin.mahasiswa');
});

Route::get('asisten', function () {
    return view('admin.asisten');
});

Route::get('asisten/tambah/kolektif', function () {
    return view('admin.tambah_kolektif');
});

Route::get('asisten/hapus/kolektif', function () {
    return view('admin.hapus_kolektif');
});

Route::get('history', function () {
    return view('admin.history');
});

Route::get('presensi', function () {
    return view('admin.presensi');
});