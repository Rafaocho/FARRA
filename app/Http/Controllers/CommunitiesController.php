<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;

class CommunitiesController extends Controller
{
    public function index()
    {
        $communitiesList = Community::all();
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
    public function search(Request $r)
    {
        $data = trim($r->input('data'));
        $communities = Community::where('name', 'like', '%' . $data . '%')->get();
        return view('communities.filter', ['communities' => $communities]);
    }
    public function showProvinces($id)
    {
        $community = Community::with('provinces')->findOrFail($id);

        return view('provinces.all', [
            'community' => $community,
            'provincesList' => $community->provinces
        ]);
    }
}
