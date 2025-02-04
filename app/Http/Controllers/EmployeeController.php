<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $position = $request->input('position');
        $address = $request->input('address');
        $workdata = $request->input('workdata');
        $json_data = json_decode($request->input('json_data'), true);

        $street = $json_data['address']['street'];
        $suite = $json_data['address']['suite'];
        $city = $json_data['address']['city'];
        $zipcode = $json_data['address']['zipcode'];
        $lat = $json_data['address']['geo']['lat'];
        $lng = $json_data['address']['geo']['lng'];

    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $position = $request->input('position');
        $address = $request->input('address');
        $workdata = $request->input('workdata');
        $json_data = json_decode($request->input('json_data'), true);

        $street = $json_data['address']['street'];
        $suite = $json_data['address']['suite'];
        $city = $json_data['address']['city'];
        $zipcode = $json_data['address']['zipcode'];
        $lat = $json_data['address']['geo']['lat'];
        $lng = $json_data['address']['geo']['lng'];

    }

    public function getPath(Request $request)
    {
        return $request->path();
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }
}
