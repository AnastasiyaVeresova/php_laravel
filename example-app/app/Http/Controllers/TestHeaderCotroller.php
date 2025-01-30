<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHeaderCotroller extends Controller
{
    public function getHeader(Request $request)
    {
        $userAgent = $request->header('User-Agent');

        echo $userAgent;
    }
}
