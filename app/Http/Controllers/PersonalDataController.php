<?php

namespace App\Http\Controllers;

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
            return redirect('report/interest')->with('success', 'Cant Access');
        }
    }

    public function update(){
        // store update data
    }
}
