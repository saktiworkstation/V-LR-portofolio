<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function showCV(){
        return view('pdf.cv', [
            'skills' => Skill::latest()->get(),
            'projects' => Project::latest()->get(),
            'educations' => Education::latest()->get(),
            'intereses' => Interest::latest()->get(),
            'experineces' => Experience::latest()->get(),
        ]);
    }

    public function downloadCV(){
        //
    }
}
