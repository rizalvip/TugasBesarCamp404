<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'name' => 'Administrator',
				'nis'  => 20215,
				'email' => 'admin@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'admin'
			],
			[
				'name' => 'khairul rizal',
				'nis'  => 20218,
				'email' => 'rizal@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'admin'
			],
			[
				'name' => 'Benzema',
				'nis'  => 20216,
				'email' => 'ben@gmail.com',
				'password' => password_hash('ben1234', PASSWORD_BCRYPT),
				'role' => 'siswa'
			]
		];
		$this->db->table('users')->insertBatch($data);
	}
}
