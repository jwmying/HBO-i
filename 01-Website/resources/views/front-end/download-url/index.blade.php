<?php 
        use Spatie\IcalendarGenerator\Components\Calendar;
        use Spatie\IcalendarGenerator\Components\Event;
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
?>