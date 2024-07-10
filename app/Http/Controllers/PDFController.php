<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Interest;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PDFController extends Controller
{
    public function showCV($id){
        $user = User::where('id', $id)->firstOrFail();
        if ($user) {
            return view('pdf.cv', [
                'user' => $user,
                'skills' => Skill::where('user_id', $id)->latest()->get(),
                'projects' => Project::where('user_id', $id)->latest()->get(),
                'educations' => Education::where('user_id', $id)->latest()->get(),
                'interests' => Interest::where('user_id', $id)->latest()->get(),
                'experineces' => Experience::where('user_id', $id)->latest()->get(),
            ]);
        }else{
            return redirect('dashboard')->with('success', 'Failed to load cv');
        }
    }

    public function downloadCV($id){
        $user = User::where('id', $id)->firstOrFail();
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('pdf.cv', [

       // if ($user) {
          //  $pdf = FacadePdf::loadView('pdf.cv', [
                                       
                'user' => $user,
                'skills' => Skill::where('user_id', $id)->latest()->get(),
                'projects' => Project::where('user_id', $id)->latest()->get(),
                'educations' => Education::where('user_id', $id)->latest()->get(),
                'interests' => Interest::where('user_id', $id)->latest()->get(),
                'experineces' => Experience::where('user_id', $id)->latest()->get(),
                ]));
        $mpdf->Output();
           // ]);
         //   return $pdf->download('pdf_file.pdf');
       // }else{
        //    return redirect('dashboard')->with('success', 'Failed to load cv');
       // }
    }
}
