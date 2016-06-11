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
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dasbor', function () {
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

Route::get('asisten/tambah', function () {
    return view('admin.add_asis');
});

Route::get('asisten/tambah/kolektif', function () {
    return view('admin.col_add_asis');
});

Route::get('asisten/hapus', function () {
    return view('admin.del_asis');
});

Route::get('asisten/hapus/kolektif', function () {
    return view('admin.col_del_asis');
});

Route::get('history', function () {
    return view('admin.history');
});

Route::get('presensi', function () {
    return view('admin.presensi');
});