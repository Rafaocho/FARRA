<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $eventsList = Event::all();
        return view('events.all', ['eventsList' => $eventsList]);
    }
    public function create()
    {
        return view('events.form');
    }
    public function show($id)
    {
        $event = Event::with('reviews.user')->findOrFail($id);

        return view('events.show', [
            'event' => $event
        ]);
    }
    public function store(Request $r)
    {
        $p = new Event();
        $p->title = $r->title;
        $p->description = $r->description;
        $p->date = $r->date;
        $p->town_id = $r->town_id;
        $p->creator_id = $r->creator_id;
        $p->save();
        return redirect()->route('events.index');
    }
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.form', ['event' => $event]);
    }
    public function update($id, Request $r)
    {
        $p = Event::find($id);
        $p->title = $r->title;
        $p->description = $r->description;
        $p->date = $r->date;
        $p->town_id = $r->town_id;
        $p->creator_id = $r->creator_id;
        $p->save();
        return redirect()->route(('events.index'));
    }
    public function destroy($id)
    {
        $p = Event::find($id);
        $p->delete();
        return redirect()->route('events.index');
    }
    public function buscar(Request $r)
    {
        $dato = $r->input('dato');
        $criterio = $r->input('criterio');
        $events = Event::where($criterio, 'like', $dato)->get();
        return view('events.filter', ['events' => $events]);
    }
}
