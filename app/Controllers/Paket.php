<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Paket extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Paket Cucian',
			'outlet' => $this->outletModel->findAll(),
			'paket' => $this->paketModel,
		];
		return view('admin/paket', $data);
	}

	public function add()
	{
		$this->paketModel->save([
			'id_outlet' => $this->request->getVar('id_outlet'),
			'jenis_paket' => $this->request->getVar('jenis_paket'),
			'nama_paket' => $this->request->getVar('nama_paket'),
			'harga_paket' => $this->request->getVar('harga_paket'),
		]);
		session()->setFlashdata('message', 'Paket berhasil ditambahkan!');
		return redirect()->to('/paket');
	}

	public function edit($id)
	{
		$this->paketModel->save([
			'id_paket' => $id,
			'id_outlet' => $this->request->getVar('id_outlet'),
			'jenis_paket' => $this->request->getVar('jenis_paket'),
			'nama_paket' => $this->request->getVar('nama_paket'),
			'harga_paket' => $this->request->getVar('harga_paket'),
		]);
		session()->setFlashdata('message', 'Paket berhasil diubah!');
		return redirect()->to('/paket');
	}

	public function delete($id)
	{
		$this->paketModel->where('id_paket', $id)->delete();
		session()->setFlashdata('delete', 'Paket berhasil dihapus!');
		return redirect()->to('/paket');
	}

	public function getPaket($id)
	{
		return json_encode($this->paketModel->where('id_paket', $id)->first());
	}
}
