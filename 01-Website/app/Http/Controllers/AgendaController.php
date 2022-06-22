<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Registration;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agendaItems = Agenda::orderBy('start_time', 'ASC')->get();
        return view('front-end.agenda.index')->with([
            'agendaItems' => $agendaItems
        ]);
    }

    public function show($slug)
    {
        $agendaItem = Agenda::where('slug', $slug)->firstOrFail();
        return view('front-end.agenda.show')->with([
            'agendaItem' => $agendaItem
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $agendaItem = Agenda::findOrFail($id);

        $newRegistration = new Registration();
        $newRegistration->activity_id = $id;
        $newRegistration->name = $request->name;
        $newRegistration->email = $request->email;
        $newRegistration->city = $request->city;
        $newRegistration->school = $request->school;
        $newRegistration->save();

        return redirect(route('agenda.show', $agendaItem->slug))->with('success', 'Uw inschrijving is geregistreerd!');
    }

    public function generateRSSFeed()
    {
        $agendaItems = Agenda::orderBy('start_time', 'ASC')->get();
        return view('front-end.agenda.feed')->with([
            'agendaItems' => $agendaItems
        ]);
    }

}
