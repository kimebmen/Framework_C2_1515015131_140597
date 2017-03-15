<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    public function awal()
    {
    	return "Hello dari RuanganController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$ruang = new Ruangan();
    	$ruang -> title = 'Lab BP';
    	$ruang->save();
        
    	return "Data dengan title {$ruang->title} Telah Disimpan";
    	
    }
}
