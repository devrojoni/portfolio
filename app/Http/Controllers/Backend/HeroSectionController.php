<?php

namespace App\Http\Controllers\Backend;

use App\Models\HeroSection;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\HeroSectionFormRequest;

class HeroSectionController extends Controller
{

    public function index()
    {
        
    }
    public function create()
    {
        $heroSection = HeroSection::first();

        return view('backend.hero.form', compact('heroSection'));
    }
    public function store(HeroSectionFormRequest $request)
    {
        HeroSection::create($request->persist());

        return redirect()
                    ->route('backend.hero-sections.create')
                    ->flashify('create', 'Data created successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(HeroSectionFormRequest $request, HeroSection $heroSection)
    {
        $heroSection->update($request->persist());
        
        return redirect()
                    ->route('backend.hero-sections.create')
                    ->flashify('update', 'Data updated successfully');
    }
    public function destroy($id)
    {
        //
    }
}
