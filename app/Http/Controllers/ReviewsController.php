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

   public function store(Request $request, $eventId)
{
    $review = new Review();
    $review->content = $request->content;
    $review->rate = $request->rate;
    $review->event_id = $eventId;
    $review->user_id = auth()->id();
    $review->save();
    $html = view('components.review-item', ['review' => $review])->render();

    return response()->json(['html' => $html]);
}

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('reviews.form', ['review' => $review]);
    }

    public function update($id, Request $r)
    {
        $validated = $r->validate([
            'content' => 'nullable|string',
            'rate' => 'required|integer|min:0|max:10',
            'event_id' => 'required|exists:events,id',
        ]);

        $p = Review::findOrFail($id);
        $p->content = $validated['content'];
        $p->rate = $validated['rate'];
        $p->event_id = $validated['event_id'];
        $p->user_id = auth()->id();
        $p->save();

        return redirect()->route('reviews.index')->with('success', 'Review actualizada');
    }

    public function destroy($id)
    {
        $p = Review::findOrFail($id);
        $p->delete();
        return redirect()->route('reviews.index')->with('success', 'Review eliminada');
    }

    public function buscar(Request $r)
    {
        $dato = $r->input('dato');
        $criterio = $r->input('criterio');
        $reviews = Review::where($criterio, 'like', "%$dato%")->get();
        return view('reviews.filter', ['reviews' => $reviews]);
    }
}