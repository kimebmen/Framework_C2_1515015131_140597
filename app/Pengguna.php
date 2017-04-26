<?php

namespace App;

// use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable implements AuthenticatableContract
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

    public function getRememberToken()
    {
        return $this->remember_token; 
    }
    public function setRememberToken($value)
    {
        $this->remember_token=$value; 
    }
    public function getRememberTokenName()
    {
        return 'remember_token'; 
    }
}
