<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function show()
    {
        // Получаем текущего пользователя или создаем нового для примера
        $user = User::first();

        return view('emails.welcome', compact('user'));
    }
}
