<?php

namespace App\Controllers;

class User extends BaseController
{
  public function __construct()
  {
    helper('form');
  }

  public function index()
  {
    $data = [
      'title' => 'Akun',
      'user' => $this->userModel->userData(),
      'outlet' => $this->outletModel->findAll(),
    ];
    return view('admin/user', $data);
  }

  public function add()
  {
    $this->userModel->save([
      'nama_user' => $this->request->getVar('nama_user'),
      'username' => $this->request->getVar('username'),
      'password' => $this->request->getVar('password'),
      'id_outlet' => $this->request->getVar('id_outlet'),
      'role' => $this->request->getVar('role'),
    ]);
    session()->setFlashdata('message', 'User berhasil ditambahkan!');
    return redirect()->to('/user');
  }

  public function edit($id)
  {
    $this->userModel->save([
      'id_user' => $id,
      'nama_user' => $this->request->getVar('nama_user'),
      'username' => $this->request->getVar('username'),
      'password' => $this->request->getVar('password'),
      'id_outlet' => $this->request->getVar('id_outlet'),
      'role' => $this->request->getVar('role'),
    ]);
    session()->setFlashdata('message', 'User berhasil diubah!');
    return redirect()->to('/user');
  }

  public function delete($id)
  {
    $this->userModel->where('id_user', $id)->delete();
    session()->setFlashdata('delete', 'User berhasil dihapus!');
    return redirect()->to('/user');
  }
}
