<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ServiceResource;
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


    public function allServices()
    {
        $data = Service::orderBy('id', 'desc')->get();

        return Inertia::render('Services/Index', [
            'services' => ServiceResource::collection($data),
        ]);
    }

    public function allBlog()
    {
        $data = Blog::orderBy('id', 'desc')->get();

        return Inertia::render('Blog/Index', [
            'blog' => BlogResource::collection($data),
        ]);
    }

    public function allAboutme()
    {
        $data = Blog::orderBy('id', 'desc')->get();

        return Inertia::render('Aboutme/Index', [
            'aboutme' => BlogResource::collection($data),
        ]);
    }


    public function allContactme()
    {
        $data = Blog::orderBy('id', 'desc')->get();

        return Inertia::render('Contactme/Index', [
            'contactme' => BlogResource::collection($data),
        ]);
    }
}
