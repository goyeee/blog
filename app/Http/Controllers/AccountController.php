<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AccountController {

	protected $userID = 0;
	protected $accountID = 0;


	public function getDetail($id)
	{
		var_dump(222);die;
		$id <= 0 ? return view('error');
		var_dumnp(1);
		$userInfo = DB::table('User')->where('userID', $id)->first();
		var_dump($userInfo);
	}
}
