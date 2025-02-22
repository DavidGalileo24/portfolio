<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\TechnologyResource;
use App\Models\Company;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::orderBy('id', 'desc')->get();
        $company = Company::orderBy('id', 'desc')->get();
        $tech = Technology::orderBy('id', 'desc')->get();
        $data->load('image');
        $data->load('company');

        return Inertia::render('Admin/Projects/Index', [
            'projects' => ProjectResource::collection($data),
            'companies' => CompanyResource::collection($company),
            'tech' => TechnologyResource::collection($tech),
        ]);
    }

    public function store(Request $request)
    {
        $data = Project::create([
            'name' => $request->name,
            'company_id' => $request->company_id,
            'link' => $request->link,
            'type' => $request->type,
            'status' => $request->status,
            'color' => $request->color,
            'link_repo' => $request->link_repo,
            'description' => $request->description,
        ]);
        $image = new ImageController;
        $img = $image->store($request->image, Project::class, $data->id);
        $data->image()->save($img);
        $data->technologies()->attach($request->technology_id);

        return redirect()->route('admin.projects');
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        $project->technologies()->sync($request->technology_id);

        return redirect()->route('admin.projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects');
    }
}
