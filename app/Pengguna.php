<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
    
    public function dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
    public function mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class);
    }
    public function peran()
    {
    	return $this->belongsToMany(Peran::class);
    }
    

}
