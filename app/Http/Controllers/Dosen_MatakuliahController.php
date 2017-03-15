<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;


class Dosen_MatakuliahController extends Controller
{
    

     public function awal()
    {
    	return "Hello dari Dosen_MatakuliahController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$dosen_matakuliah = new Dosen_matakuliah();
    	$dosen_matakuliah -> dosen_id = 1;
    	$dosen_matakuliah -> matakuliah_id = 1;
    	
    	$dosen_matakuliah->save();
    	return "Data dengan id dosen : {$dosen_matakuliah->dosen_id} dan id matakuliah : {$dosen_matakuliah->matakuliah_id} Telah Disimpan";
    	
    }
}
