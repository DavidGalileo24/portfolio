<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::orderBy('id', 'desc')->get();
        $data->load('image');
        $data->load('company');
        return Inertia::render('Admin/Projects/Index', [
            'projects' => ProjectResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        Project::create([
            'name' => $request->name,
            'company_id' => $request->company_id,
            'type' => $request->type,
            'status' => $request->status,
            'description' => $request->description,
            'name' => $request->name,
        ]);

        return redirect()->route('admin.projects');
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('admin.projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects');
    }
}
