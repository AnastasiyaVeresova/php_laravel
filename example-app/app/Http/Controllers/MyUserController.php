<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function showUser()
    {
        $user = new \stdClass();
        $user->first_name = 'Test';
        $user->last_name = 'User';
        $user->id = 1;


        return response()->json($user);
    }
}
