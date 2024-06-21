<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Interest;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        return view('report.index', [
            'skills' => Skill::latest()->get(),
            'projects' => Project::latest()->get(),
            'educations' => Education::latest()->get(),
            'intereses' => Interest::latest()->get(),
            'experiences' => Experience::latest()->get(),
        ]);
    }
}
