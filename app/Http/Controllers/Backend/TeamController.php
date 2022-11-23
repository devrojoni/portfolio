<?php

namespace App\Http\Controllers\Backend;

use App\Models\TeamSection;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TeamSectionFormRequest;

class TeamController extends Controller
{
    public function index()
    {
        $teamSections=TeamSection::latest()->get();
        
        return view('backend.team.index', compact('teamSections'));
    }
    public function create()
    {
        return view('backend.team.form');
    }
    public function store(TeamSectionFormRequest $request)
    {
        TeamSection::create($request->persist());

        return redirect()
                    ->route('backend.team-sections.index')
                    ->flashify('create', 'Data created successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit(TeamSection $teamSection)
    {
        return view('backend.team.form', compact('teamSection'));
    }
    public function update(TeamSectionFormRequest $request, TeamSection $teamSection)
    {
        $teamSection->update($request->persist());
        
        return redirect()
                    ->route('backend.team-sections.index')
                    ->flashify('update', 'Data updated successfully');
    }
    public function destroy(TeamSection $teamSection)
    {
        $teamSection->delete();

        return redirect()
                ->route('backend.team-sections.index')
                ->flashify('delete', 'Data deleted successfully');
    }
}
