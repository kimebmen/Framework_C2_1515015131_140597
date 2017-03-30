<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $table = 'peran';
    public function pengguna(){
    	return $this->belongsToMany(Pengguna::class);
    }
}
