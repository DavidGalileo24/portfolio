<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ViewController extends Controller
{
    public function allProjects()
    {
        $data = Project::orderBy('id', 'desc')->get();

        return Inertia::render('Projects/Index', [
            'projects' => ProjectResource::collection($data),
        ]);
    }
}
