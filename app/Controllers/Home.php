<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Buku Tamu Online";
		return view('home/index', $data);
	}

	public function acara()
	{
		$data['title'] = 'Halaman Acara';
		return view('acara/index', $data);
	}

	public function kehadiran()
	{
		$data['title'] = 'Halaman Kehadiran';
		return view('kehadiran/index', $data);
	}

	//--------------------------------------------------------------------

}
