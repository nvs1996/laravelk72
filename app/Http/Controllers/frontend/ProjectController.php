<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\project;
use Cart;
class ProjectController extends Controller
{
    
    public function getProject()
    {
        $projects = project::orderBy("id", "DESC")->paginate(100);
        return view('frontend.project', [
            "projects" => $projects,
        ]);
    }
    public function GetProjectDetail($id)
    {
        $projects=project::find($id);
        return view('frontend.projectdetail', [
            "projects" => $projects,
        ]);
    }
}
