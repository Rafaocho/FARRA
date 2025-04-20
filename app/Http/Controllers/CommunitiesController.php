<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;

class CommunitiesController extends Controller
{
    public function index()
    {
        $communitiesList = Community::paginate(10);
        return view('communities.all', ['communitiesList' => $communitiesList]);
    }
    public function create()
    {
        return view('communities.form');
    }
    public function store(Request $r)
    {
        $p = new Community();
        $p->name = $r->name;
        $p->save();
        return redirect()->route('communities.index');
    }
    public function edit($id)
    {
        $community = Community::find($id);
        return view('communities.form', ['community' => $community]);
    }
    public function update($id, Request $r)
    {
        $p = Community::find($id);
        $p->name = $r->name;
        $p->save();
        return redirect()->route(('communities.index'));
    }
    public function destroy($id)
    {
        $p = Community::find($id);
        $p->delete();
        return redirect()->route('communities.index');
    }
    public function buscar(Request $r)
    {
        $dato = $r->input('dato');
        $criterio = $r->input('criterio');
        $communities = Community::where($criterio, 'like', $dato)->get();
        return view('communities.filter', ['communities' => $communities]);
    }
    public function showProvinces($id)
    {
        $community = Community::with('provinces')->findOrFail($id); // Asegúrate de tener la relación 'provinces'

        return view('provinces.all', [
            'community' => $community,
            'provincesList' => $community->provinces
        ]);
    }
}
