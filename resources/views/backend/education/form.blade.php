<x-layouts.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold text-center">{{ isset($educationSection) ? __('Update Education') : __('Add Education')}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($educationSection) ? route('backend.education-sections.update', $educationSection->id) : route('backend.education-sections.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($educationSection) @method('PUT') @endisset
                        <div class="row">
                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Institute')" 
                                name="institute" 
                                id="institute"
                                :value="$educationSection->institute ?? null"
                                required 
                            />

                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Course')" 
                                name="course"
                                id="course"
                                :value="$educationSection->course ?? null" 
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
                                :value="optional($educationSection->end_at ?? null)->format('Y-m-d')"
                            />

                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('End At')"
                                type="date" 
                                name="end_at"
                                id="end_at" 
                                :value="optional($educationSection->end_at ?? null)->format('Y-m-d')"
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
                                <a href="{{ route('backend.education-sections.index') }}" class="btn btn-danger ms-2">{{ __('Back') }}</a>
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
            $('#status').val("{{$educationSection->status ?? 'Active'}}");
            });
        </script>
    </x-slot>
</x-layouts.backend>