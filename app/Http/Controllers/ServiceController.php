<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::orderBy('id', 'desc')->get();
        $data->load('image');

        return Inertia::render('Admin/Services/Index', [
            'services' => ServiceResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        $image = new ImageController;
        $data = Service::create(['name' => $request->name, 'description' => $request->description]);
        $img = $image->store($request->image, Service::class, $data->id);
        $data->image()->save($img);
        sleep(1);

        return redirect()->route('admin.services');
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return redirect()->route('admin.services');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services');
    }
}
