<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    public $table = 'matakuliah';
    public $fillable = ['title','keterangan'];

    public function Dosen_Matakuliah()
    {
    	return $this->hasMany(Dosen_Matakuliah::class);
    }

    public function Jadwal_Matakuliah()
    {
    	return $this->hasOne(Jadwal_Matakuliah::class);
    }

    public function listMatakuliah(){
        $out = [];
        foreach ($this->all() as $mk) {
            $out[$mk->id] = "{$mk->title} ({$mk->keterangan})";
        }
        return $out;
    }

    // public function listMatakuliah1(){
    //     $out = [];
    //     foreach ($this->all() as $mk) {
    //         $out[$dsnMtk->$mk->id] = "{$mk->title} ({$mk->keterangan})";
    //     }
    //     return $out;
    // }
}
