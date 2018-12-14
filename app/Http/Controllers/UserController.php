<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show($id)
    {
        // $users = DB::table('users')->get($id);
        // echo json_encode($users);
        // echo $users[0]->id;

        return $id;
        // return json_encode($users);
        // return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
