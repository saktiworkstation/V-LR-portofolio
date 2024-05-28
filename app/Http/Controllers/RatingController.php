<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rating.index',[
            'datas' => Rating::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function user()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Rating::destroy($id);
        return redirect('rating')->with('success', 'Rating has been deleted!');
    }
}
