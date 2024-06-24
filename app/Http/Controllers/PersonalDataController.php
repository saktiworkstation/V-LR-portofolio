<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalDataController extends Controller
{
    public function index(){
        if(Auth::user()->roles->contains('name', 'user')){
            return view('personal-data.index',[
                'data' => Auth::user(),
            ]);
        }else{
            return redirect('dashboard')->with('success', 'Cant Access');
        }
    }

    public function update(Request $request){
        $user = Auth::user();
        if(Auth::user()->roles->contains('name', 'user')){
            $rules = [
                'number' => 'required|numeric',
                'address' => 'required',
                'linkporto' => 'required|url',
                'description' => 'required',
            ];

            $validatedData = $request->validate($rules);

            User::where('id', $user->id)->update($validatedData);

            return redirect('personal')->with('success', 'Personal Data has been updated!');
        }else{
            return redirect('dashboard')->with('success', 'Cant Access');
        }
    }
}
