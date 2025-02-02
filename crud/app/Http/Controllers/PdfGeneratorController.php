<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;

class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $data = [
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email,
        ];

        $pdf = PDF::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }
}
