<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
	protected $table                = 'm_paket';
	protected $primaryKey           = 'id_paket';
	protected $allowedFields        = ['id_outlet', 'jenis_paket', 'nama_paket', 'harga_paket'];

	public function paketData()
	{
		return $this
			->join('m_outlet', 'm_outlet.id_outlet = m_paket.id_outlet')
			->get()->getResultArray();
	}

	public function paketDataPerOutlet($id)
	{
		return $this
			->where(['id_outlet' => $id])->get()->getResultArray();
	}
}
