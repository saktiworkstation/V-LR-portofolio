<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::user()->id;

        try {
            return view('rating.edit',[
                'data' => Rating::where('user_id', $id)->firstOrFail(),
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('rating.create');
        }
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
