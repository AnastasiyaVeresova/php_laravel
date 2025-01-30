<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTestController extends Controller
{
    public function testRequest(Request $request)
    {
        $firstName = $request->input('first_name', 'no name');
        $lastName = $request->input('last_name', 'no name');

        echo $firstName . ' ' . $lastName;


    }
}
