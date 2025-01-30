<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController2 extends Controller
{
    public function showForm()
    {
        return view('upload-form');
    }

    public function fileUpload(Request $request)
    {
        /*if($request->hasFile('upload-photo')) {
            $file = $request->file('upload-photo');
            echo $file->path();
            echo '<br>';
            echo $file->getClientOriginalName();
            echo $file->getClientOriginalExtension();
            $file->storeAs('images', $file->getClientOriginalName());
        }else{
            echo 'No file uploaded';
        }*/

        foreach ($request->upload_photo as $photo){
            var_dump($photo);
        }

    }
}
