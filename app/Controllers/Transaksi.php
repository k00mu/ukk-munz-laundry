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
				->findAll(),
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
			'member' => $this->memberModel->findAll(),
		];
		return view('transaksi/tambah', $data);
	}

	public function tambahTransaksi()
	{
		$dataTransaksi = [
			'kode_invoice' => $this->request->getVar('kode_invoice'),
			'kode_invoice' => $this->request->getVar('kode_invoice'),
			'id_member' => $this->request->getVar('id_member'),
			'batas_waktu' => $this->request->getVar('batas_waktu'),
			'biaya_tambahan' => $this->request->getVar('biaya_tambahan'),
			'diskon' => $this->request->getVar('diskon'),
			'pajak' => $this->request->getVar('pajak'),
			'total_biaya' => $this->request->getVar('total_biaya'),
			'status' => $this->request->getVar('status'),
			'konfirmasi' => $this->request->getVar('konfirmasi'),
			'id_outlet' => session()->get('id_outlet'),
			'id_user' => session()->get('id_user'),
		];

		for ($i = 0; $i < $this->request->getVar('id_paket'); $i++) {
			$data = [
				'id_detail' => $this->request->insertID('m_detail_transaksi', 'id_detail'),
				'id_transaksi' => $this->request->insertID('m_transaksi', 'id_transaksi'),
				'id_paket' => $this->request->getVar(`id_paket[$i]`),
				'qty' => $this->request->getVar(`qty[$i]`),
				'total_harga' => $this->request->getVar(`total_harga[$i]`),
			];
		}

		$this->transaksiModel->save($dataTransaksi);
		$this->detailModel->save($dataDetail);
		session()->setFlashdata('message', 'Pesanan berhasil ditambahkan!');
		return redirect()->to('/transaksi');
	}
}
