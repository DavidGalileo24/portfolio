<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\TechnologyResource;
use App\Models\Technologie;

class TechnologieController extends Controller
{
    public function index()
    {
        $data = Technologie::orderBy('id', 'desc')->get();
        $data->load('image');
        return Inertia::render('Admin/Tech/Index', [
            'tech' => TechnologyResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        $image = new ImageController();
        $data = Technologie::create(['name'=>$request->name,'percentaje'=>$request->percentaje,'type'=>$request->type]);
        $img = $image->store($request->image, Technologie::class, $data->id);
        $data->image()->save($img);
        sleep(1);
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
