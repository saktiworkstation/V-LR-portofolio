<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PDFController extends Controller
{
    public function showCV($id){
        return view('pdf.cv', [
            'skills' => Skill::where('user_id', $id)->latest()->get(),
            'projects' => Project::where('user_id', $id)->latest()->get(),
            'educations' => Education::where('user_id', $id)->latest()->get(),
            'intereses' => Interest::where('user_id', $id)->latest()->get(),
            'experineces' => Experience::where('user_id', $id)->latest()->get(),
        ]);
    }

    public function downloadCV($id){
        $pdf = FacadePdf::loadView('pdf.cv', [
            'skills' => Skill::where('user_id', $id)->latest()->get(),
            'projects' => Project::where('user_id', $id)->latest()->get(),
            'educations' => Education::where('user_id', $id)->latest()->get(),
            'intereses' => Interest::where('user_id', $id)->latest()->get(),
            'experineces' => Experience::where('user_id', $id)->latest()->get(),
        ]);
        return $pdf->download('pdf_file.pdf');
    }
}
