<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Nette\Schema\ValidationException;

class TestValidationController extends Controller
{
    public function show()
    {
        return view('employee_validation');
    }

    public function post(Request $request)
    {
        try {
            $validated = $request->validate([
                'fullname' => ['required'],'password' => ['min:5']


            ]);
        } catch (ValidationException $e) {
            echo $e->getMessage();
        }

        var_dump($validated);
    }

}
