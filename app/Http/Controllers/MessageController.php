<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('message.index',[
            'datas' => Message::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:70',
            'email' => 'required|string|lowercase|email|max:255',
            'message' => 'required'
        ]);

        Message::create($validatedData);

        return redirect('dashboard')->with('success', 'New message has been added!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Message::destroy($id);
        return redirect('message')->with('success', 'Message has been deleted!');
    }
}
