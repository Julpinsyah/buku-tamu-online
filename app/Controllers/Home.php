<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	public function acara()
	{
		return view('acara/index');
	}

	public function kehadiran()
	{
		return view('kehadiran/index');
	}

	//--------------------------------------------------------------------

}
