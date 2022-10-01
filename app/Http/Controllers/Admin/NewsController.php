<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\NewsRepository;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $items = resolve(NewsRepository::class)->getAllNewsOrderByView();
        return view('admin.news.index',compact('items'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        resolve(NewsRepository::class)->store($request);

       return redirect('/admin/news');
    }
}
