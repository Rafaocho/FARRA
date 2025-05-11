<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Town;

class EventsController extends Controller
{
    public function index()
    {
        $eventsList = Event::all();
        return view('events.all', ['eventsList' => $eventsList]);
    }
    public function create(Request $r)
    {
        $townId = $r->query('town_id');
        $townsList = Town::all();
        $types = [
            'party' => 'Fiesta',
            'religious' => 'Religioso',
            'cultural' => 'Cultural',
            'gastronomic' => 'Gastronómico',
        ];

        return view('events.form', compact('townsList', 'types', 'townId'));
    }
    public function show($id)
    {
        $event = Event::with(['reviews.user', 'attendees'])->findOrFail($id);
        return view('events.show', ['event' => $event]);
    }
    public function store(Request $r)
    {
        $p = new Event();
        $p->title = $r->title;
        $p->description = $r->description;
        $p->date = $r->date;
        $p->type = $r->type;
        $p->town_id = $r->town_id;
        $p->minAge = $r->age;
        $p->creator_id = auth()->id();
        $p->save();

        return redirect()->route('towns.events', ['id' => $p->town_id]);
    }
    public function edit($id)
    {
        $event = Event::find($id);
        $townsList = Town::all();
        $types = [
            'party' => 'Fiesta',
            'religious' => 'Religioso',
            'cultural' => 'Cultural',
            'gastronomic' => 'Gastronómico',
        ];

        return view('events.form', ['event' => $event, 'types' => $types, 'townsList' => $townsList]);
    }
    public function update($id, Request $r)
    {
        $p = Event::find($id);
        $p->title = $r->title;
        $p->description = $r->description;
        $p->date = $r->date;
        $p->type = $r->type;
        $p->town_id = $r->town_id;
        $p->creator_id = auth()->id();
        $p->save();
        return redirect()->route('events.show', $p->id);
    }
    public function destroy($id)
    {
        $p = Event::findOrFail($id);
        $townId = $p->town_id;
        $p->delete();

        return redirect()->route('towns.events', ['id' => $townId]);
    }
    public function buscar(Request $r)
    {
        $dato = $r->input('dato');
        $criterio = $r->input('criterio');
        $events = Event::where($criterio, 'like', $dato)->get();
        return view('events.filter', ['events' => $events]);
    }
    public function join($id)
    {
        $user = auth()->user();
        $event = Event::findOrFail($id);
        if ($user->events()->where('event_id', $id)->exists()) {
            return back()->with('message', 'Ya estás inscrito en este evento.');
        }
        $user->events()->attach($id);
        return back()->with('message', 'Te has inscrito al evento con éxito.');
    }
    public function leave($id)
    {
        $user = auth()->user();
        $event = Event::findOrFail($id);
        if (!$user->events()->where('event_id', $event->id)->exists()) {
            return back()->with('message', 'No estás inscrito en este evento.');
        }
        $user->events()->detach($event->id);
        return back()->with('message', 'Has cancelado tu inscripción al evento.');
    }
}
