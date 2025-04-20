<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviewsList = Review::all();
        return view('reviews.all', ['reviewsList' => $reviewsList]);
    }
    public function create()
    {
        return view('reviews.form');
    }
    public function store(Request $r)
    {
        $p = new Review();
        $p->content = $r->content;
        $p->rate=$r->rate;
        $p->event_id=$r->event_id;
        $p->user_id = $r->user_id;
        $p->save();
        return redirect()->route('reviews.index');
    }
    public function edit($id){
        $review = Review::find($id);
        return view('reviews.form', ['review' => $review]);
    }
    public function update($id, Request $r)
    {
        $p = Review::find($id);
        $p->content = $r->content;
        $p->rate=$r->rate;
        $p->event_id=$r->event_id;
        $p->user_id = $r->user_id;
        $p->save();
        return redirect()->route(('reviews.index'));
    }
    public function destroy($id)
    {
        $p = Review::find($id);
        $p->delete();
        return redirect()->route('reviews.index');
    }
    public function buscar(Request $r){
        $dato = $r->input('dato');
        $criterio = $r->input('criterio');
        $reviews = Review::where($criterio, 'like', $dato)->get();
        return view('reviews.filter', ['reviews' => $reviews]);
    }
}
