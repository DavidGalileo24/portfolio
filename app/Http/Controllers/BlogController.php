<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    
    public function index(){
        $data = Blog::orderBy('id', 'desc')->get();
        return Inertia::render('Blogs', [
            'Blogs' => BlogResource::collection($data)
        ]);
    }
}
