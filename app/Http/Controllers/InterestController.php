<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('interest.index',[
            'datas' => Interest::where('user_id', Auth::user()->id)->latest()->get(),
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

        $validatedData['user_id'] = Auth::user()->id;

        Interest::create($validatedData);

        return redirect('interest')->with('success', 'New Interest has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $interest = Interest::where('id', $id)->firstOrFail();
        if($interest && $interest->user_id == Auth::user()->id){
            return view('interest.edit',[
                'data' => Interest::where('id', $id)->firstOrFail(),
            ]);
            }
        else{
            return redirect('interest')->with('success', 'Interest Not Faund');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $interest = Interest::where('id', $id)->firstOrFail();
        if($interest && $interest->user_id == Auth::user()->id){
            $rules = [
                'interest' => 'required|max:70',
            ];

            $validatedData = $request->validate($rules);

            Interest::where('id', $id)->update($validatedData);

            return redirect('interest')->with('success', 'Interest has been updated!');
        }
        else{
            return redirect('interest')->with('success', 'Interest Not Faund');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $interest = Interest::where('id', $id)->firstOrFail();
        $user = Auth::user();
        if ($interest && ($interest->user_id == Auth::user()->id || $user->roles->contains('name', 'admin'))) {
            Interest::destroy($id);
            if($user->roles->contains('name', 'admin')){
                return redirect('report/interest')->with('success', 'Interest has been deleted!');
            }
                return redirect('interest')->with('success', 'Interest has been deleted!');
            }
        else {
            return redirect('report/interest')->with('success', 'Interest Not Faund');
        }
    }
}
