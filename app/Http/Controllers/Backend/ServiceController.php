<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\Backend\ServiceSectionFormRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $serviceSections=Service::latest()->get();
        return view('backend.service.index', compact('serviceSections'));
    }
    public function create()
    {
        return view('backend.service.form');
    }
    public function store(ServiceSectionFormRequest $request)
    {
        Service::create($request->persist());

        return redirect()
                    ->route('backend.service-sections.index')
                    ->flashify('create', 'Data created successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit(Service $serviceSection)
    {
        return view('backend.service.form', compact('serviceSection'));
    }
    public function update(ServiceSectionFormRequest $request, Service $serviceSections)
    {
        $serviceSections->update($request->persist());
        
        return redirect()
                    ->route('backend.service-sections.index')
                    ->flashify('update', 'Data updated successfully');
    }
    public function destroy(Service $serviceSections)
    {
        $serviceSections->delete();

        return redirect()
                ->route('backend.service-sections.index')
                ->flashify('delete', 'Data deleted successfully');
    }
}
