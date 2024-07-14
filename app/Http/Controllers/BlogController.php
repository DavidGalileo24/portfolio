<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::orderBy('id', 'desc')->get();

        return Inertia::render('Admin/Blog/Index', [
            'blogs' => BlogResource::collection($data),
        ]);
    }

    
    public function store(Request $request)
    {
        Blog::create($request->all);

        return redirect()->route('admin.blog');
    }

    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());

        return redirect()->route('admin.blog');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blog');
    }
}
