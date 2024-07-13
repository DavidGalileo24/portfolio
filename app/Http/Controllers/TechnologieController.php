<?php

namespace App\Http\Controllers;

use App\Http\Resources\TechnologyResource;
use App\Models\Technologie;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TechnologieController extends Controller
{
    public function index()
    {
        $data = Technologie::orderBy('id', 'desc')->get();

        return Inertia::render('Admin/Tech/Index', [
            'tech' => TechnologyResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        Technologie::create($request->all);

        return redirect()->route('admin.tech');
    }

    public function update(Request $request, Technologie $tech)
    {
        $tech->update($request->all());

        return redirect()->route('admin.tech');
    }

    public function destroy(Technologie $tech)
    {
        $tech->delete();

        return redirect()->route('admin.tech');
    }
}
