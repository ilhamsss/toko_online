<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'hi-plant'
		];
		return view('hello/world', $data);
	}

	//--------------------------------------------------------------------

}
