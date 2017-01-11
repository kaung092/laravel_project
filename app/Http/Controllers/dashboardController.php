<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dashboardController extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function getRecord(){
		$records = DB::connection('mysql')->select('SELECT * FROM homestead.tracking;',[1]);
		return view('dashboard', ['records' => $records]);
	}

	public function saveRecord(Request $req){
		$url = $req->input('url');
		$ip = $req->input('ip');
		$item_type = $req->input('item_type');
		$item_id = $req->input('item_id');

		DB::table('tracking')->insert([
			'url'=> $url,
			'ip'=> $ip,
			'item_type'=> $item_type,
			'item_id'=> $item_id,
			'created_at'=> date("y-m-d"),
		]);
}
}
