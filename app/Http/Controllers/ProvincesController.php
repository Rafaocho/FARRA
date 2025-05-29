<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Event;
use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    public function index()
    {
        $provincesList = Province::all();
        return view('provinces.all', ['provinceList' => $provincesList]);
    }
    public function create()
    {
        return view('provinces.form');
    }
    public function store(Request $r)
    {
        $p = new Province();
        $p->name = $r->name;
        $p->community_id = $r->community_id;
        $p->save();
        return redirect()->route('provinces.index');
    }
    public function edit($id)
    {
        $province = Province::find($id);
        return view('provinces.form', ['province' => $province]);
    }
    public function update($id, Request $r)
    {
        $p = Province::find($id);
        $p->name = $r->name;
        $p->community_id = $r->community_id;
        $p->save();
        return redirect()->route(('provinces.index'));
    }
    public function destroy($id)
    {
        $p = Province::find($id);
        $p->delete();
        return redirect()->route('provinces.index');
    }
    public function search(Request $r)
    {
        $data = trim($r->input('data'));
        $provinces = Province::where('name', 'like', '%' . $data . '%')->get();
        return view('provinces.filter', ['provinces' => $provinces]);
    }
    public function showTowns($id)
    {
        $province = Province::with(['towns', 'community'])->findOrFail($id);
        $townIds = $province->towns->pluck('id');
        $eventsRaw = Event::whereIn('town_id', $townIds)->with('town')->get();

        $events = $eventsRaw->map(function ($event) {
            return [
                'title' => $event->title,
                'date' => $event->date,
                'town' => $event->town ? $event->town->name : 'Desconocido',
            ];
        });

        return view('towns.all', [
            'province' => $province,
            'townsList' => $province->towns,
            'community' => $province->community,
            'eventsJson' => $events,
        ]);
    }
}
