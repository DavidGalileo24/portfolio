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

        return Inertia::render('Admin/Services/Index', [
            'services' => ServiceResource::collection($data),
        ]);
    }
    
    public function store(Request $request)
    {
        Service::create($request->all);

        return redirect()->route('admin.service');
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());

        return redirect()->route('admin.service');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.service');
    }
}
