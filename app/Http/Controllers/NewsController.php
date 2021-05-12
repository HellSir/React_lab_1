<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function make_news(NewsRequest $request)
    {
        $news = News::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        return response('Successful', 204);
    }

    public function get_news(Request $request){

            $news = News::all();
        return new NewsResource($news);
    }
}
