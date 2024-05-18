<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('project.index',[
            'datas' => Project::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'img' => 'image',
            'link' => 'url|required',
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('project-img');
        }

        Project::create($validatedData);

        return redirect('project')->with('success', 'New project has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('project.edit', [
            'data' => Project::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::where('id', $id)->firstOrFail();
        if($project){
            $rules = [
                'name' => 'required|string|max:100',
                'description' => 'nullable|string',
                'link' => 'url|required',
            ];

            $validatedData = $request->validate($rules);

            if ($request->file('img')) {
                if ($request->oldImg) {
                    Storage::delete($request->oldImg);
                }
                $validatedData['img'] = $request->file('img')->store('project-img');
            }

            Project::where('id', $id)->update($validatedData);

            return redirect('project')->with('success', 'project has been updated!');
        }
        else{
            return 'Project Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
