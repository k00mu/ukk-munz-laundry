<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{

	public function __construct()
	{
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Transaksi',
			'transaksi' => $this->transaksiModel
				->join('m_outlet', 'm_outlet.id_outlet = m_transaksi.id_outlet')
				->join('m_member', 'm_member.id_member = m_transaksi.id_member')
				->join('m_user', 'm_user.id_user = m_transaksi.id_user')
				->get()->getResultArray(),
		];

		return view('transaksi/index', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Transaksi',
			'paket' => $this->paketModel
				->where('id_outlet', session()->get('id_outlet'))
				->findAll(),
			'paket1' => $this->paketModel
				->first(),
		];
		return view('transaksi/tambah', $data);
	}

	public function tambahTransaksi()
	{
		$data = [];
	}
}
