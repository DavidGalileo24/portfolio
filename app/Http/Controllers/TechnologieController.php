<?php

namespace App\Http\Controllers;

use App\Http\Resources\TechnologyResource;
use App\Models\Technology;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TechnologyController extends Controller
{
    public function index()
    {
        $data = Technology::orderBy('id', 'desc')->get();
        $data->load('image');

        return Inertia::render('Admin/Tech/Index', [
            'tech' => TechnologyResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        $image = new ImageController();
        $data = Technology::create(['name' => $request->name, 'percentaje' => $request->percentaje, 'type' => $request->type]);
        $img = $image->store($request->image, Technology::class, $data->id);
        $data->image()->save($img);
        sleep(1);

        return redirect()->route('admin.tech');
    }

    public function update(Request $request, Technology $tech)
    {
        $tech->update($request->all());

        return redirect()->route('admin.tech');
    }

    public function destroy(Technology $tech)
    {
        $tech->delete();

        return redirect()->route('admin.tech');
    }
}
