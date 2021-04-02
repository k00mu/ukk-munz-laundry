<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
	public function __construct()
	{
		session();
		helper('form');
		$this->authModel = new AuthModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Masuk',
			'validation' => \Config\Services::validation(),
		];
		return view('login', $data);
	}

	public function login()
	{

		// Validasi Data
		if ($this->validate(
			[
				'username' => [
					'label' => 'Username',
					'rules' => 'required',
					'errors' => [
						'required' => '{field} tidak boleh kosong!',
					],
				],

				'password' => [
					'label' => 'Password',
					'rules' => 'required',
					'errors' => [
						'required' => '{field} tidak boleh kosong!',
					],
				],

			],
		)) {
			// Jika validasi berhasil
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			$check = $this->authModel->login($username, $password);
			if ($check) {
				// Jika data cocok
				session()->set('log', true);
				session()->set('id_user', $check['id_user']);
				session()->set('nama_user', $check['nama_user']);
				session()->set('username', $check['username']);
				session()->set('role', $check['role']);

				$role = $check['role'];
				// Account level
				if ($role == 'admin') {
					return redirect()->to('/admin');
				} elseif ($role == 'kasir') {
					return redirect()->to('/kasir');
				} elseif ($role == 'owner') {
					return redirect()->to('/owner');
				}
			} else {
				// Jika data tidak cocok
				session()->setFlashdata('message', 'Login gagal, periksa username dan password anda!');
				return redirect()->to('/')->withInput();
			}
		} else {
			// Jika validasi gagal
			$validation = \Config\Services::validation();

			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to('/')->withInput();
		}
	}

	public function logout()
	{
		session()->remove('log');
		session()->remove('id_user');
		session()->remove('nama_user');
		session()->remove('username');
		session()->remove('role');
		session()->setFlashdata('message', 'Logout berhasil!');
		return redirect()->to(base_url(''));
	}

	//--------------------------------------------------------------------

}
