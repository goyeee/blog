<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController {

	public function show($id)
	{
		$id <= 0 ? view('error') : '';
		$userInfo = DB::table('User')
			->where('userID', $id)
			->first(
			['UserID',
			 'Name',
			 'MobileNumber',
			 'Sex',
			 'BornDate',
			]);
		return $userInfo;

	}
}
