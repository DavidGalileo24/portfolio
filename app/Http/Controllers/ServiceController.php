<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::orderBy('id', 'desc')->get();

        return Inertia::render('Services/Index', [
            'services' => ServiceResource::collection($data),
        ]);
    }
}
