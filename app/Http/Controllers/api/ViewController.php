<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ViewController extends Controller
{
    public function update(News $news)
    {
        resolve(NewsRepository::class)->update($news);
        return response()->json( ['message' => 'view updated successfully'], Response::HTTP_OK);
    }
}
