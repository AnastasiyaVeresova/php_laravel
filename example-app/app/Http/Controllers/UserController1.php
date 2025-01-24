<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController1 extends Controller
{
    // public function showUsers()
    // {
    //     $users = DB::connection('mysql')->table('user')->select(['first_name', 'last_name', 'email'])->get();
    //     print_r($users);
    // }

    public function __invoke()
    {
        DB::connection('mysql')->table('user')->insert(['first_name' => 'NiKolay', 'last_name' =>'Nikolaev', 'email' => 'nikolaev@gmail.com']);
        $users = DB::connection('mysql')->table('user')->select(['first_name', 'email'])->get();

        DB::connection('mysql')->table('user')->insert(['first_name' => 'NiKolay', 'last_name' => 'Nikolaev', 'email' => 'nikolaev@gmail.com']);
        $users = DB::connection('mysql')->table('user')->select(['first_name', 'email'])->get();

        DB::connection('mysql')->table('user')->insert(['first_name' => 'NiKolay', 'last_name' => 'Nikolaev', 'email' => 'nikolaev@gmail.com']);
        $users = DB::connection('mysql')->table('user')->select(['first_name', 'email'])->get();

        DB::connection('mysql')->table('user')->insert(['first_name' => 'NiKolay', 'last_name' => 'Nikolaev', 'email' => 'nikolaev@gmail.com']);
        $users = DB::connection('mysql')->table('user')->select(['first_name', 'email'])->get();
        return view('user', ['users' => $users]);

    }
}
