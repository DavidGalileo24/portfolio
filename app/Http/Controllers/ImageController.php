<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store($request, $model, $id)
    {
        $url = Storage::put('tech', $request);
        $data = Image::create([
            'file' => Storage::url($url),
            'imageable_type' => $model,
            'imageable_id' => $id,
        ]);

        return $data;
    }
}
