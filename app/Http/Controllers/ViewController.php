<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutmeResource;
use App\Http\Resources\BlogResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ServiceResource;
use App\Models\Aboutme;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
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
    public function allAboutme()
    {
        $data = Aboutme::orderBy('id', 'desc')->get();

        return Inertia::render('Aboutme/Index', [
            'aboutme' => AboutmeResource::collection($data),
        ]);
    }
    
    public function allServices()
    {
        $data = Service::orderBy('id', 'desc')->get();

        return Inertia::render('Services/Index', [
            'services' => ServiceResource::collection($data),
        ]);
    }
    public function allBlogs()
    {
        $data = Blog::orderBy('id', 'desc')->get();

        return Inertia::render('Blog/Index', [
            'blogs' => BlogResource::collection($data),
        ]);
    }
    public function allContact()
    {
        return response()->json('test');
    }
}
