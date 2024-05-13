<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('interest.index',[
            'datas' => Interest::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'interest' => 'required|max:70'
        ]);

        Interest::create($validatedData);

        return redirect('interest')->with('success', 'New Interest has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('interest.edit',[
            'data' => Interest::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $interest = Interest::where('id', $id)->firstOrFail();
        if($interest){
            $rules = [
                'interest' => 'required|max:70',
            ];

            $validatedData = $request->validate($rules);

            Interest::where('id', $id)->update($validatedData);

            return redirect('interest')->with('success', 'Interest has been updated!');
        }
        else{
            return 'Interest Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interest $interest)
    {
        //
    }
}
