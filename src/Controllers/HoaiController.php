<?php

namespace Hoai\Firstpackage\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

class HoaiController extends BaseController
{
	public function getView()
	{
		return view('hoai::hoai');
	}
}
