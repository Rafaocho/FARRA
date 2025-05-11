<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Town;
use App\Models\Province;
use App\Models\Event;
use Illuminate\Http\Request;

class TownsController extends Controller
{
    public function index()
    {
        $townsList = Town::all();
        return view('towns.all', ['townsList' => $townsList]);
    }

    public function create(Request $r)
    {
        $town = new Town();
        $provincesList = Province::all(); 
        $provinceId = $r->query('province_id');
        return view('towns.form', compact('town', 'provincesList', 'provinceId'));
    }
    public function store(Request $r)
    {
        $p = new Town();
        $p->name = $r->name;
        $p->latitude = $r->latitude;
        $p->longitude = $r->longitude;
        $p->province_id = $r->province_id;
        $p->save();
        return redirect()->route('towns.events', ['id' => $p->id]);
    
    }
    public function edit($id)
    {
        $town = Town::findOrFail($id);
        $provincesList = Province::all(); 
        return view('towns.form', compact('town', 'provincesList'));
    }
    public function update($id, Request $r)
    {
        $p = Town::find($id);
        $p->name = $r->name;
        $p->latitude = $r->latitude;
        $p->longitude = $r->longitude;
        $p->province_id = $r->province_id;
        $p->save();
        return redirect()->route(('towns.index'));
    }
    public function destroy($id)
    {
        $p = Town::find($id);
        $p->delete();
        return redirect()->route('towns.index');
    }
    public function buscar(Request $r)
    {
        $dato = $r->input('dato');
        $criterio = $r->input('criterio');
        $towns = Town::where($criterio, 'like', $dato)->get();
        return view('towns.filter', ['towns' => $towns]);
    }
    public function showEvents($id)
    {
        $town = Town::with(['events', 'province'])->findOrFail($id);

        return view('events.all', [
            'town' => $town,
            'eventsList' => $town->events,
            'province' => $town->province
        ]);
    }
}
