<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('education.index',[
            'educations' => Education::where('user_id', Auth::user()->id)->latest()->get(),
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

            $validatedData['user_id'] = Auth::user()->id;

        Education::create($validatedData);

        return redirect('education')->with('success', 'New Education has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $education = Education::where('id', $id)->firstOrFail();
        if($education && $education->user_id == Auth::user()->id){
            return view('education.edit',[
                'data' => Education::where('id', $id)->firstOrFail(),
            ]);
        }
        else{
            return 'Education Not Faund';
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $education = Education::where('id', $id)->firstOrFail();
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $education = Education::where('id', $id)->firstOrFail();
        $user = Auth::user();
        if ($education && ($education->user_id == Auth::user()->id || $user->hasRole('admin'))) {
            Education::destroy($id);
            if($user->hasRole('admin')){
                return redirect('report/education')->with('success', 'Education has been deleted!');
            }
                return redirect('education')->with('success', 'Education has been deleted!');
            }
        else {
            return redirect('report/education')->with('success', 'Education Not Faund');
        }
    }
}
