<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $items = resolve(NewsRepository::class)->getAllNewsOrderByView();
        return view('site.news.index',compact('items'));

    }

    public function show(News $news)
    {
        $response = Http::get('http://localhost:8000/api/view/'.$news->id);

        return view('site.news.show',compact('news'));
    }
}
