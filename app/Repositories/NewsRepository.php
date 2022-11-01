<?php


namespace App\Repositories;


use App\Models\News;
use Illuminate\Http\Request;


class NewsRepository
{
    public function getAllNewsOrderByView()
    {
        return News::query()->orderBy('view', 'desc')->get();
    }

    public function store(Request $request)
    {
        $news = News::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
        ]);
        return $news;
    }

    public function getAllNews()
    {
        return News::query()->orderBy('id', 'desc')->get();

    }

    public function update(News $news)
    {
        $news->update([
            'view' => $news->view + 1,
        ]);


    }


}
