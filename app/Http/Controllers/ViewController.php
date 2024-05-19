<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Aboutme;
use Inertia\Inertia;

class ViewController extends Controller
{
    public function allAboutme()
    {
        $data = Aboutme::orderBy('id', 'desc')->get();

        return Inertia::render('Dashboard', [
            'aboutme' => BlogResource::collection($data),
        ]);
    }
}
