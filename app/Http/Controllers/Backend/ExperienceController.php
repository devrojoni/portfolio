<?php

namespace App\Http\Controllers\Backend;

use App\Models\Experience;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ExperienceSectionFormRequest;

class ExperienceController extends Controller
{
   
    public function index()
    {
        $experienceSections=Experience::latest()->get();
        return view('backend.experience.index', compact('experienceSections'));
    }
    public function create()
    {
        return view('backend.experience.form');
    }
    public function store(ExperienceSectionFormRequest $request)
    {
        Experience::create($request->validated());

        return redirect()
                    ->route('backend.experience-sections.index')
                    ->flashify('create', 'Data created successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit(Experience $experienceSection)
    {
        return view('backend.experience.form', compact('experienceSection'));
    }
    public function update(ExperienceSectionFormRequest $request, Experience $experienceSection)
    {
        $experienceSection->update($request->validated());
        
        return redirect()
                    ->route('backend.experience-sections.index')
                    ->flashify('update', 'Data updated successfully');
    }
    public function destroy(Experience $experienceSection)
    {
        $experienceSection->delete();

        return redirect()
                ->route('backend.experience-sections.index')
                ->flashify('delete', 'Data deleted successfully');
    }
}
