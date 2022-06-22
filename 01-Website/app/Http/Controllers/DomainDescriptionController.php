<?php

namespace App\Http\Controllers;

use App\Models\DomainDescription;
use Illuminate\Http\Request;

class DomainDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domainDescriptions = DomainDescription::all();
        return view('front-end.domain-description.index')->with([
            'domainDescriptions' => $domainDescriptions
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $domainDescription = DomainDescription::where('slug', $slug)->firstOrFail();
        return view('front-end.domain-description.show')->with([
            'domainDescription' => $domainDescription
        ]);
    }

    public function generateRSSFeed()
    {
        $domainDescriptions = DomainDescription::all();
        return view('front-end.domain-description.feed', compact('domainDescriptions'));
    }

}
