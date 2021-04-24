<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MenuController extends BaseController
{
	public function home()
	{
		return view('beranda');
	}

	public function infoKegiatan()
	{
		return view('info-kegiatan');
	}

	public function dataSiswa()
	{
		return view('siswa');
	}
}
