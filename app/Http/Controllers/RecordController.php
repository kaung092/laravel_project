<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class dashboardController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function getRecord(){
		$records = DB::connection('mysql')->select('SELECT * FROM homestead.tracking;',[1]);
		return view('dashboard', ['records' => $records]);
	}

}
