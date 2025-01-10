<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'logo_path' => 'nullable|image|max:2048',
            'website' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $this->uploadImage($request);
        }

        Company::create($request->post());
        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    private function uploadImage($request)
    {
        $logo = $request->file('logo');
        $ext = $logo->getClientOriginalExtension();
        $fileName = implode("_", explode(" ", $request->get('name')));
        $fileName = $fileName . '.' . $ext;
        $logo->storeAs('public', $fileName);
        $request->request->add(['logo_path' => $fileName]);
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'logo' => 'nullable|image|max:2048',
            'website' => 'nullable|url',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $company->update($validated);
        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }

}
