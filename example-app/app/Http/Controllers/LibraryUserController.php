<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LibraryUserController extends Controller
{
    protected $users = [
        ['id' => 0, 'username' => 'user1', 'first_name' => 'Petr', 'last_name' => 'Petrov', 'list_of_books' => ['Book1', 'Book3', 'Book4']],
        ['id' => 1, 'username' => 'user2', 'first_name' => 'Petr2', 'last_name' => 'Petrov2', 'list_of_books' => ['Book2', 'Book4', 'Book3']],
    ];

    public function show($id)
    {
        /*if (isset($this->users[$id])) {
            Log::info('User data:', ['user' => $this->users[$id]]);
            return view('user', ['user' => $this->users[$id]]);
        } else {
            abort(404);
        }*/

        return response()->json($this->users);
    }
}
