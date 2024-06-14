<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('skill.index',[
            'datas' => Skill::where('user_id', Auth::user()->id)->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'skill_level' => 'required|in:Beginner,Intermediate,Advanced,Expert',
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        Skill::create($validatedData);

        return redirect('skill')->with('success', 'New skill has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('skill.edit', [
            'data' => Skill::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $skill = Skill::where('id', $id)->firstOrFail();
        if($skill){
            $rules = [
                'name' => 'required|string|max:100',
                'description' => 'nullable|string',
                'skill_level' => 'required|in:Beginner,Intermediate,Advanced,Expert',
            ];

            $validatedData = $request->validate($rules);

            Skill::where('id', $id)->update($validatedData);

            return redirect('skill')->with('success', 'Skill has been updated!');
        }
        else{
            return 'Skill Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Skill::destroy($id);
        return redirect('skill')->with('success', 'Skill has been deleted!');
    }
}
