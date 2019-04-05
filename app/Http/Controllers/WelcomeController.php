<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $news = array();
        $breaking_news = DB::table('news')->select()->where('priority', '=', 1)->orderByDesc('created_at')->get();
        $business_news = DB::table('news')->select()->where('category', '=', 'business')->orderBy('created_at', 'DESC')->take(12)->get();
        $entertainment_news = DB::table('news')->select()->where('category', '=', 'entertainment')->orderBy('created_at', 'DESC')->take(12)->get();
        $lifestyle_news = DB::table('news')->select()->where('category', '=', 'lifestyle')->orderBy('created_at', 'DESC')->take(12)->get();
        $sports_news = DB::table('news')->select()->where('category', '=', 'sports')->orderBy('created_at', 'DESC')->take(12)->get();
        $education_news = DB::table('news')->select()->where('category', '=', 'education')->orderBy('created_at', 'DESC')->take(12)->get();
        $health_news = DB::table('news')->select()->where('category', '=', 'health')->orderBy('created_at', 'DESC')->take(12)->get();
        $literature_news = DB::table('news')->select()->where('category', '=', 'health')->orderBy('created_at', 'DESC')->take(12)->get();

        $news = ['breaking_news' => $breaking_news, 'business_news' => $business_news, 'lifestyle_news' => $lifestyle_news, 'entertainment_news' => $entertainment_news, 'sports_news' => $sports_news, 'education_news' => $education_news, 'health_news' => $health_news, 'literature_news' => $literature_news];
        return view('welcome', ['news' => $news]);

    }
}
