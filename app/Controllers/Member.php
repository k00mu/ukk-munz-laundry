<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Member extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Member',
			'member' => $this->memberModel->findAll(),
		];
		return view('admin/member', $data);
	}

	public function add()
	{
		$this->memberModel->save([
			'nama_member' => $this->request->getVar('nama_member'),
			'alamat_member' => $this->request->getVar('alamat_member'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'telp_member' => $this->request->getVar('telp_member'),
		]);
		session()->setFlashdata('message', 'Member berhasil ditambahkan!');
		return redirect()->to('/member');
	}

	public function edit($id)
	{
		$this->memberModel->save([
			'id_member' => $id,
			'nama_member' => $this->request->getVar('nama_member'),
			'alamat_member' => $this->request->getVar('alamat_member'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'telp_member' => $this->request->getVar('telp_member'),
		]);
		session()->setFlashdata('message', 'Member berhasil diubah!');
		return redirect()->to('/member');
	}

	public function delete($id)
	{
		$this->memberModel->where('id_member', $id)->delete();
		session()->setFlashdata('delete', 'Member berhasil dihapus!');
		return redirect()->to('/member');
	}
}
