<?php

namespace App\Http\Controllers\Backend;

use App\Models\SkillSection;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SkillSectionFormRequest;

class SkillSectionController extends Controller
{
    public function index()
    {
        $skillSections = SkillSection::latest()->get();

        return view('backend.skill.index', compact('skillSections'));
    }
    public function create()
    {
        return view('backend.skill.form');
    }
    public function store(SkillSectionFormRequest $request)
    { 
        SkillSection::create($request->validated());

        return redirect()
                    ->route('backend.skill-sections.index')
                    ->flashify('create', 'Data created successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit(SkillSection $skillSection)
    {
        return view('backend.skill.form', compact('skillSection'));
    }
    public function update(SkillSectionFormRequest $request,SkillSection $skillSection)
    {
        $skillSection->update($request->validated());
        
        return redirect()
                    ->route('backend.skill-sections.index')
                    ->flashify('update', 'Data updated successfully');
    }

    public function destroy(SkillSection $skillSection)
    {
        $skillSection->delete();

        return redirect()
                ->route('backend.skill-sections.index')
                ->flashify('delete', 'Data deleted successfully');
    }
}
