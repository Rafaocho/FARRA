<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Province;
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
    public function buscar(Request $r)
    {
        $dato = $r->input('dato');
        $criterio = $r->input('criterio');
        $provinces = Province::where($criterio, 'like', $dato)->get();
        return view('provinces.filter', ['provinces' => $provinces]);
    }
    public function showTowns($id)
    {
        $province = Province::with(['towns', 'community'])->findOrFail($id);

        return view('towns.all', [
            'province' => $province,
            'townsList' => $province->towns,
            'community' => $province->community
        ]);
    }
}
