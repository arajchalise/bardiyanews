<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $news = array();
        $breaking_news = DB::table('news')->select()->where('priority', '=', 1)->get();
        $business_news = DB::table('news')->select()->where('category', '=', 'business')->get();
        $entertainment_news = DB::table('news')->select()->where('category', '=', 'entertainment')->get();
        $lifestyle_news = DB::table('news')->select()->where('category', '=', 'lifestyle')->get();

        $news = ['breaking_news' => $breaking_news, 'business_news' => $business_news, 'lifestyle_news' => $lifestyle_news, 'entertainment_news' => $entertainment_news];
        return view('welcome', ['news' => $news]);

    }
}
