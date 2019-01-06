<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController {
    
    public function show($id)
    {
        $userInfo = DB::table('User')->get();
        var_dump($userInfo);

    }
}
