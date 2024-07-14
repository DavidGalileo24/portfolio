<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryblogResource;
use App\Models\Categoryblog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryblogController extends Controller
{
    public function index()
    {
        $data = Categoryblog::orderBy('id', 'desc')->get();

        return Inertia::render('Admin/Categoryblog/Index', [
            'categoryblog' => CategoryblogResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        Categoryblog::create($request->all);

        return redirect()->route('admin.categoryblog');
    }

    public function update(Request $request, Categoryblog $categoryblog)
    {
        $categoryblog->update($request->all());

        return redirect()->route('admin.categoryblog');
    }

    public function destroy(Categoryblog $categoryblog)
    {
        $categoryblog->delete();

        return redirect()->route('admin.categoryblog');
    }
}
