<?php

namespace App\Controllers;

class Outlet extends BaseController
{
  public function __construct()
  {
    helper('form');
  }

  public function index()
  {
    $data = [
      'title' => 'Outlet',
      'outlet' => $this->outletModel->findAll(),
    ];
    return view('admin/outlet', $data);
  }

  public function add()
  {
    $this->outletModel->save([
      'nama_outlet' => $this->request->getVar('nama_outlet'),
      'alamat_outlet' => $this->request->getVar('alamat_outlet'),
      'telp_outlet' => $this->request->getVar('telp_outlet'),
    ]);
    session()->setFlashdata('message', 'Outlet berhasil ditambahkan!');
    return redirect()->to('/outlet');
  }

  public function edit($id)
  {
    $this->outletModel->save([
      'id_outlet' => $id,
      'nama_outlet' => $this->request->getVar('nama_outlet'),
      'alamat_outlet' => $this->request->getVar('alamat_outlet'),
      'telp_outlet' => $this->request->getVar('telp_outlet'),
    ]);
    session()->setFlashdata('message', 'Outlet berhasil diubah!');
    return redirect()->to('/outlet');
  }

  public function delete($id)
  {
    $this->outletModel->where('id_outlet', $id)->delete();
    session()->setFlashdata('delete', 'Outlet berhasil dihapus!');
    return redirect()->to('/outlet');
  }
}
