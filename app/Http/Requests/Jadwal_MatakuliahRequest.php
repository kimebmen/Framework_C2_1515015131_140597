<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class Jadwal_MatakuliahRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'mahasiswa_id'=>'required',
			'dosen_matakuliah_id'=>'required',
			'ruangan_id'=>'required'
		];
			if ($this->is('mahasiswa/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}