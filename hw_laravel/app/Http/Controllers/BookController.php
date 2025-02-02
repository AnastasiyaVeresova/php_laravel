<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('form2');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:books|max:255',
            'author' => 'required|max:100',
            'genre' => 'required',
        ], [
            'title.required' => 'Название книги обязательно.',
            'title.unique' => 'Название книги должно быть уникальным.',
            'title.max' => 'Название книги не должно превышать 255 символов.',
            'author.required' => 'Имя автора обязательно.',
            'author.max' => 'Имя автора не должно превышать 100 символов.',
            'genre.required' => 'Жанр обязателен.',
        ]);

        Book::create($validated);

        return redirect()->route('index_book')->with('success', 'Книга успешно добавлена.');
    }
}
