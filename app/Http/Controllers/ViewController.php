<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\TechnologyResource;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Technology;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ViewController extends Controller
{
    public function allProjects()
    {
        $data = Project::orderBy('id', 'desc')->get();
        $data->load('image');
        $data->load('company');
        $data->load('technologies');

        return Inertia::render('Web/Projects', [
            'projects' => ProjectResource::collection($data),
        ]);
    }

    public function showProjects(Project $project)
    {
        $project->load('image');
        $project->load('company');
        $project->load('technologies');

        return Inertia::render('Web/Projects', [
            'show_project' => ProjectResource::make($project),
        ]);
    }

    public function allAboutme()
    {
        $tech = Technology::orderBy('id', 'desc')->get();
        $company = Company::orderBy('id', 'desc')->get();

        return Inertia::render('Web/Aboutme', [
            'tech' => TechnologyResource::collection($tech),
            'company' => CompanyResource::collection($company),
        ]);
    }

    public function allServices()
    {
        $data = Service::orderBy('id', 'desc')->get();
        $data->load('image');

        return Inertia::render('Web/Services', [
            'services' => ServiceResource::collection($data),
        ]);
    }

    public function allBlogs()
    {
        $data = Blog::orderBy('id', 'desc')->get();

        return Inertia::render('Web/Blog', [
            'blogs' => BlogResource::collection($data),
        ]);
    }

    public function allContact()
    {
        return Inertia::render('Web/Contactme', [
            'info' => [
                'email' => 'info@davidsalgado.dev',
                'phone' => '(+503) 64295902',
                'address' => 'San Salvador, El Salvador',
            ],
        ]);
    }

    public function storeContact(Request $request)
    {
        $data = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        return redirect()->route('contact');
    }
}
