<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::orderBy('id', 'desc')->get();

        return Inertia::render('Admin/Contact/Index', [
            'contacts' => ContactResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        $data = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'Stored data', 'data' => $data]);
    }
}
