<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
	public function __construct()
	{
		$this->model = new \App\Models\User();
	}

	public function registrasi()
	{
		return view('registrasi');
	}

	public function login()
	{
		return view('login');
	}

	public function simpanRegistrasi()
	{
		$data = [
			'name'                  => $this->request->getPOST('name'),
			'email'                 => $this->request->getPOST('email'),
			'password'              => $this->request->getPOST('password'),
			'konfirmasi_password'   => $this->request->getPOST('kofirm_pass')
		];

		$validation = \Config\Services::validation();
		$validation->setRules([
			'name'                  => 'required',
			'email'                 => 'required|valid_email|is_unique[users.email]',
			'password'              => 'required|min_length[8]',
			'konfirmasi_password'   => 'required|matches[password]'
		], [
			'password' => ['min_length' => 'Password minimal 8 karakter']
		]);

		if ($validation->run($data)) {
			$this->model->save([
				'name'          => $data['name'],
				'email'         => $data['email'],
				'password'      => password_hash($data['password'], PASSWORD_BCRYPT),
				'role'          => 'siswa'
			]);

			return redirect()->to(base_url('registrasi'))->with('Suskses', 'Registrasi Berhasil !');
		} else {

			$errorMessages = $validation->getErrors();
			return redirect()->to(base_url('registrasi'))->with('Gagal', $errorMessages);
		}
	}

	public function prosesLogin()
	{
		$data = [
			'email'		=> $this->request->getPOST('email'),
			'password'	=> $this->request->getPOST('password'),
		];

		$validation = \Config\Services::validation();

		$validation->setRules([
			'email'                 => 'required|valid_email',
			'password'              => 'required|min_length[8]'
		]);

		if ($validation->run($data)) {
			$user = $this->model->where('email', $data['email'])->first();
			if ($user) {
				$verifikasiPassword = password_verify($data['password'], $user['password']);
				if ($verifikasiPassword) {
					$sessionData = [
						'name'          => $user['name'],
						'role'          => $user['role'],
						'logged_in'		=> TRUE
					];

					session()->set($sessionData);
					return redirect()->to(base_url('siswa'));
				}
			}
		} else {
			return redirect()->to(base_url('login'))->with('gagal', 'email/password tidak cocok !');
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}
