<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Http\Requests\Backend\EducationSectionFormRequest;

class EducationController extends Controller
{
    public function index()
    {
        $educationSections=Education::latest()->get();
        return view('backend.education.index', compact('educationSections'));
    }
    public function create()
    {
        return view('backend.education.form');
    }
    public function store(EducationSectionFormRequest $request)
    {
        Education::create($request->validated());

        return redirect()
                    ->route('backend.education-sections.index')
                    ->flashify('create', 'Data created successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit(Education $educationSection)
    {
        return view('backend.education.form', compact('educationSection'));
    }
    public function update(EducationSectionFormRequest $request, Education $educationSection)
    {
        $educationSection->update($request->validated());
        
        return redirect()
                    ->route('backend.education-sections.index')
                    ->flashify('update', 'Data updated successfully');
    }
    public function destroy(Education $educationSection)
    {
        $educationSection->delete();

        return redirect()
                ->route('backend.education-sections.index')
                ->flashify('delete', 'Data deleted successfully');
    }
}
