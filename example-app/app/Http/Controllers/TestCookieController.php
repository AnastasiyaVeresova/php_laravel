<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCookieController extends Controller
{
    public function TestCookie(Request $request)
    {
        $sessionIdentityfy = $request->cookie('laravel_session');
        $session = $request->session();
        echo $sessionIdentityfy . ' ';
        //var_dump($session);
        echo $session->get('_token');
    }
}
