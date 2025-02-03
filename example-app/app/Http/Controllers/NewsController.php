<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Events\NewsHidden;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $news = new News();
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->save();

        return redirect()->route('news.index')->with('success', 'Новость успешно создана.');
    }

    public function hide($id)
    {
        $news = News::findOrFail($id);
        $news->hidden = true;
        $news->save();

        NewsHidden::dispatch($news);

        return redirect()->route('news.index')->with('success', 'Новость успешно скрыта.');
    }
}
