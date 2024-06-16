<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleManageController extends Controller
{
    public function index(){
        return view('role-manage.index', [
            'datas' => User::with('roles')->get(),
        ]);
    }
}
