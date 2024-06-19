<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleManageController extends Controller
{
    public function index(){
        return view('role-manage.index', [
            'datas' => User::with('roles')->get(),
        ]);
    }

    public function create(){
        return view('role-manage.create', [
            'users' => User::latest()->get(),
            'roles' => Role::latest()->get(),
        ]);
    }
}
