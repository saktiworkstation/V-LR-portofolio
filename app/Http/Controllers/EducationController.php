<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('education.index',[
            'educations' => Education::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'degree' => 'required|max:70',
            'field_of_study' => 'required|max:100',
            'education_name' => 'required|max:100',
            'graduation_year' => 'required|max:50',
        ]);

        Education::create($validatedData);

        return redirect('education')->with('success', 'New Education has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('education.edit',[
            'data' => Education::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $education = Education::where('id', $id)->firstOrFail();
        if($education){
            $rules = [
                'degree' => 'required|max:70',
                'field_of_study' => 'required|max:100',
                'education_name' => 'required|max:100',
                'graduation_year' => 'required|max:50',
            ];

            $validatedData = $request->validate($rules);

            Education::where('id', $id)->update($validatedData);

            return redirect('education')->with('success', 'education has been updated!');
        }
        else{
            return 'Education Not Faund';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Education::destroy($id);
        return redirect('education')->with('success', 'Education has been deleted!');
    }
}
