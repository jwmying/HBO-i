<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use App\Models\NewsFilters;

class CmsNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsArticles = NewsArticle::all();
        
        return view('back-end.news.index')->with([
            'newsArticles' => $newsArticles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.news.create');
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

        return view('back-end.news.show')->with([
            'newsArticle' => $newsArticle,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $newsArticle = NewsArticle::where('slug', $slug)->firstOrFail();

        return view('back-end.news.edit')->with([
            'newsArticle' => $newsArticle
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsArticle::findOrFail($id)->delete();
        
        return redirect(route('admin.news.index'))->with('sucess', 'Succesvol het nieuwsartikel verwijderd!');
    }
}
