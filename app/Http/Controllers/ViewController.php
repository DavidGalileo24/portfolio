<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutmeResource;
use App\Models\Aboutme;
use Inertia\Inertia;

class ViewController extends Controller
{
    public function allAboutme()
    {
        $data = Aboutme::orderBy('id', 'desc')->get();

        return Inertia::render('Welcome', [
            'aboutme' => AboutmeResource::collection($data),
        ]);
    }
}
