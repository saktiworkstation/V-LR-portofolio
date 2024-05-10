<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('experience.index', [
            'datas' => Experience::orderBy('order', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required|max:255',
            'duration' => 'required|max:255',
            'field' => 'required',
            'order' => 'required|numeric|unique:experiences',
        ]);

        Experience::create($validatedData);

        return redirect('experience.create')->with('success', 'New ecperience has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $experience = Experience::where('id', $id)->firstOrFail();
        return view('experience.edit', [
            'data' => $experience
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $experience = Experience::where('id', $id)->firstOrFail();
        $rules = [
            'company' => 'required|max:255',
            'duration' => 'required|max:255',
            'field' => 'required',
        ];

        if ($request->order != $experience->order) {
            $rules['order'] = 'required|numeric|unique:experiences';
        }

        $validatedData = $request->validate($rules);

        Experience::where('id', $id)->update($validatedData);

        return redirect('experience')->with('success', 'experience has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Experience::destroy($id);
        return redirect('experience')->with('success', 'Experience has been deleted!');
    }
}
