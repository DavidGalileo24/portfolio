<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Inertia\Inertia;

class ProjectController extends Controller
{
    
    public function index(){
        $data = Project::orderBy('id', 'desc')->get();
        return Inertia::render('projects', [
            'projects' => ProjectResource::collection($data)
        ]);
    }
}
