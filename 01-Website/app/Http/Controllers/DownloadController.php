<?php

namespace App\Http\Controllers;

use Spatie\IcalendarGenerator\Components\Calendar;
use Spatie\IcalendarGenerator\Components\Event;
use Illuminate\Http\Request;
use App\Models\Agenda;
use DateTime;

class DownloadController extends Controller
{
    /**
     * 
     * @param int The activity Id should be provided here.
     * @return \Illuminate\Http\Response
     */
    public function DownloadAgenda(Request $request)
    {     
        $id = $request->input('activityId');
        $agenda = Agenda::findOrFail($id);
        $eventName = $agenda->title;
        $start = new DateTime($agenda->start_time);
        $end = new DateTime($agenda->end_time);
        $ics = Calendar::create('HBO-i')
        ->event(Event::create($eventName)
            ->startsAt($start)
            ->endsAt($end)
        )
        ->get();
        header('Content-type: text/calendar; charset=utf-8');
        header('Content-Disposition: inline; filename=calendar.ics');
        echo $ics;
        exit;
    }

    public function DownloadEvent(Request $request) {
        $eventName = $request->input('eventName');
        $start = $request->input('start'); 
        $end = $request->input('end'); 
        $ics = Calendar::create('HBO-i')
        ->event(Event::create($eventName)
            ->startsAt($start)
            ->endsAt($end)
        )
        ->get();
        header('Content-type: text/calendar; charset=utf-8');
        header('Content-Disposition: inline; filename=calendar.ics');
        echo $ics;
        exit;
    }
}
