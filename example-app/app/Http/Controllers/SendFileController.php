<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendFileController extends Controller
{
    public function __invoke()
{
        return response()->file('\public\public\uploads\23.pdf');
}
    }
