<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari MahasiswaController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Kimebmen Simbolon';
    	$mahasiswa->nim = '1515015131';
    	$mahasiswa->alamat = 'Samarinda';
    	$mahasiswa->pengguna_id = 1;
    	$mahasiswa->save();
        
    	return "Data dengan Nama {$mahasiswa->nama} Telah Disimpan";
    	
    }
}
