<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    //
   	public $table = 'dosen_matakuliah';
    public $fillable = ['dosen_id','matakuliah_id'];

    public function Dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    public function Matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
  

    public function getNamadosenAttribute(){
        return $this->dosen->nama;
    }
    public function getNipdosenAttribute(){
        return $this->dosen->nip;
    }
    public function getTitlematakuliahAttribute(){
        return $this->matakuliah->title;
    }

    public function Jadwal_Matakuliah()
    {
        return $this->hasOne(Jadwal_Matakuliah::class);
    }

    public function listDosenDanMatakuliah()
    {
    	$out = [];
    	foreach ($this->all() as $dsnMtk) {
    		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (Matakuliah{$dsnMtk->matakuliah->title})";
    	}
    	return $out;
    }

   
    // public function getUsernameAttribute(){
    //     return $this->pengguna->username;
    // }

}
