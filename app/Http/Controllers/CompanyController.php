<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CompanyController extends Controller
{
    public function index()
    {
        $data = Company::orderBy('id', 'desc')->get();

        return Inertia::render('Admin/Company/Index', [
            'company' => CompanyResource::collection($data),
        ]);
    }

    public function store(Request $request)
    {
        Company::create($request->all);

        return redirect()->route('admin.company');
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->all());

        return redirect()->route('admin.company');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('admin.company');
    }
}
