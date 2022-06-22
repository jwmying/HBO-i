<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View("front-end.news-page.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $newsArticle = NewsArticle::where('slug', $slug)->firstOrFail();

        if($newsArticle->isDraft() && !Auth::check()) {
            return abort(401);
        }

        return view('front-end.news-page.show')->with([
            'newsArticle' => $newsArticle
        ]);
    }

    public function generateRSSFeed()
    {
        $news_articles = NewsArticle::where('status', '=', 'published')->get();
        return view('front-end.news-page.feed', compact('news_articles'));
    }
}
