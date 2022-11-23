<x-layouts.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold text-center">{{ isset($experienceSection) ? __('Update Experience') : __('Add Experience')}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($experienceSection) ? route('backend.experience-sections.update', $experienceSection->id) : route('backend.experience-sections.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($experienceSection) @method('PUT') @endisset
                        <div class="row">
                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Company')" 
                                name="company" 
                                id="company"
                                :value="$experienceSection->company ?? null"
                                required 
                            />

                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Designation')" 
                                name="designation"
                                id="designation"
                                :value="$experienceSection->designation ?? null" 
                                required
                            />
                        </div>
                        <div class="row">
                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Started At')" 
                                type="date"
                                name="started_at" 
                                id="started_at"
                                :value="optional($experienceSection->started_at ?? null)->format('Y-m-d')"
                            />

                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('End At')"
                                type="date" 
                                name="end_at"
                                id="end_at"
                                :value="optional($experienceSection->end_at ?? null)->format('Y-m-d')"
                            />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{ __('Status') }} <i class="text-danger">*</i></label>
                                    <div>
                                        <select class="form-select" name="status" id="status" required>
                                            <option value="Active">{{ __('Active') }}</option>
                                            <option value="Inactive">{{ __('Inactive') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content text-align-center mt-2">
                            <button class="btn btn-primary">{{ __('Submit') }}</button>
                            <div>
                                <a href="{{ route('backend.experience-sections.index') }}" class="btn btn-danger ms-2">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $(document).ready(function(){
            $('#status').val("{{ $experienceSection->status ?? 'Active' }}");
            });
        </script>
    </x-slot>
</x-layouts.backend>