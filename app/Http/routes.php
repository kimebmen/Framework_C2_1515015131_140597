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

Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');

Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('matakuliah','MatakuliahController@awal');

Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::get('ruangan','RuanganController@awal');

Route::get('ruangan/tambah','RuanganController@tambah');

Route::get('dosen','DosenController@awal');

Route::get('dosen/tambah','DosenController@tambah');

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');

Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');

Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');


Route::get('/', function () {
    return view('posttest1');
});
Route::get('/public', function () {
    return ("Nama Saya : R.H. Kimebmen Simbolon");
});


Route::get('pengguna/{pengguna}', function ($pengguna) {
    return ("Hallo World dari pengguna $pengguna");
});
