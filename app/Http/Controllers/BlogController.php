<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::orderBy('id', 'desc')->get();

        return Inertia::render('Blog/Index', [
            'Blogs' => BlogResource::collection($data),
        ]);
    }
}
