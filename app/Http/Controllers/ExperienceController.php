<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('experience.index', [
            'datas' => Experience::where('user_id', Auth::user()->id)->orderBy('order', 'asc')->get()
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

        $validatedData['user_id'] = Auth::user()->id;

        Experience::create($validatedData);

        return redirect('experience')->with('success', 'New ecperience has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $experience = Experience::where('id', $id)->firstOrFail();
        if ($experience && $experience->user_id == Auth::user()->id) {
            return view('experience.edit', [
                'data' => $experience
            ]);
        }
        else {
            return redirect('experience')->with('success', 'Experience Not Faund');
        }
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
        $experience = Experience::where('id', $id)->firstOrFail();
        $user = Auth::user();
        if ($experience && ($experience->user_id == Auth::user()->id || $user->hasRole('admin'))) {
            Experience::destroy($id);
            if($user->hasRole('admin')){
                return redirect('report/experience')->with('success', 'Experience has been deleted!');
            }
            return redirect('experience')->with('success', 'Experience has been deleted!');
        }
        else {
            return redirect('experience')->with('success', 'Experience Not Faund');
        }
    }
}
