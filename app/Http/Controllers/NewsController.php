<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function show(news $news)
    {
        $news = news::find($news->id);
        $related_topics = news::where('category', '=', $news->category)->where('id', '!=', $news->id)->orderBy('created_at', 'DESC')->get();
        return view('News.show', ['news' => $news, 'related_topics' => $related_topics]);
    }
}
