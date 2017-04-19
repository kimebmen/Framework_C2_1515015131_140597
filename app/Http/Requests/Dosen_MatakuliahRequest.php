<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class Dosen_MatakuliahRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
			'dosen_id'=>'required',
			'matakuliah_id'=>'required',
		];
		if ($this->is('mahasiswa/tambah')) {
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}