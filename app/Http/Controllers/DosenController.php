<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;


class DosenController extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari DosenController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen -> nama = 'Kimebmen, S.Kom';
    	$dosen -> nip = '15150151310';
    	$dosen -> alamat = 'Bengkuring';
    	$dosen -> pengguna_id = 1;

    	$dosen->save();
    	return "Data dengan nama {$dosen->nama} Telah Disimpan";
    	
    }
}
