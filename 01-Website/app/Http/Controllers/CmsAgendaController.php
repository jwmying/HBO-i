<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CmsAgendaController extends Controller
{

    public function index()
    {
        $agendaItems = Agenda::all();
        return view('back-end.agenda.index')->with([
            'agendaItems' => $agendaItems
        ]);
    }

    public function create()
    {
        return view('back-end.agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'location' => 'required|max:255',
            'start_time' => 'required',
            'end_time' => 'required',
            'organisator' => 'required|max:255',
            'link' => 'required|max:255|url',
            ],
            [
                'title.max' => 'De lengte van de titel is te lang ... maximaal 255 tekens.',
                'location.max' => 'De lengte van de locatie is te lang ... maximaal 255 tekens.',
                'link.max' => 'De lengte van link is te lang ... maximaal 255 tekens.'
            ]
        );

        $newAgenda = new Agenda();
        $newAgenda->title = $request->title;
        $image = $request->file('image');
        $image->storeAs('agenda/images', $image->getClientOriginalName());
        $newAgenda->image_name = $image->getClientOriginalName();
        $newAgenda->location = $request->location;
        $newAgenda->start_time = $request->start_time;
        $newAgenda->end_time = $request->end_time;
        $newAgenda->organisator = $request->organisator;
        $newAgenda->link = $request->link;
        $newAgenda->description = $request['editor_content'];
        $newAgenda->slug = SlugService::createSlug(Agenda::class, 'slug', $request->title);

        $newAgenda->save();

        return redirect(route('admin.agenda.index'))->with('sucess', 'Succesvol een nieuwe agenda item aangemaakt');
    }

    public function show($slug)
    {
        $agendaItem = Agenda::where('slug', $slug)->firstOrFail();
        return view('back-end.agendaItem.show')->with([
            'agendaItem' => $agendaItem
        ]);
    }

    public function edit($slug)
    {
        $agendaItem = Agenda::where('slug', $slug)->firstOrFail();
        return view('back-end.agenda.edit')->with([
            'agendaItem' => $agendaItem
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
            'location' => 'required|max:255',
            'start_time' => 'required',
            'organisator' => 'required|max:255',
            'link' => 'required|max:255|url',
            
        ],
        [
            'title.max' => 'De lengte van de titel is te lang ... maximaal 255 tekens.',
            'location.max' => 'De lengte van de locatie is te lang ... maximaal 255 tekens.',
            'link.max' => 'De lengte van link is te lang ... maximaal 255 tekens.'
        ]
        );
        
        $editAgenda = Agenda::findOrFail($id);
        $editAgenda->title = $request->title;
        if ($request->has('image')) {
            $image = $request->file('image');
            $image->storeAs('agenda/images', $image->getClientOriginalName());
            $editAgenda->image_name = $image->getClientOriginalName();
        }
        $editAgenda->location = $request->location;
        $editAgenda->start_time = $request->start_time;
        $editAgenda->end_time = $request->end_time;
        $editAgenda->organisator = $request->organisator;
        $editAgenda->link = $request->link;
        $editAgenda->description = $request['editor_content'];

        // Update news article slug if a new title is given
        if($editAgenda->title != $request->title) {
            $editAgenda->slug = SlugService::createSlug(Agenda::class, 'slug', $request->title);
        }

        $editAgenda->update();

        return redirect(route('admin.agenda.index'))->with('sucess', 'Succesvol agenda item aangepast');
    }

    public function destroy($id)
    {
        $delete = Agenda::findOrFail($id)->delete();
        return redirect(route('admin.agenda.index'))->with('sucess', 'Succesvol het artikel verwijderd!');
    }
}
