<x-layouts.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold text-center">{{ isset($skillSection) ?  __('Update Skill') :  __('New Skill') }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($skillSection) ? route('backend.skill-sections.update', $skillSection->id) : route('backend.skill-sections.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($skillSection) @method('PUT') @endisset
                        <div class="row">
                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Name')" 
                                name="name" 
                                id="name"
                                :value="$skillSection->name ?? null"
                                required 
                            />

                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Percentage')"
                                type="number" 
                                name="percentage"
                                id="percentage" 
                                :value="$skillSection->percentage ?? null"
                                required
                            />
                        </div>
                        <div class="row">
                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Color')" 
                                type="color"
                                name="color" 
                                id="color"
                                :value="$skillSection->color ?? null"
                                required 
                            />
                            
                            <div class="col-md-6">
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
                                <a href="{{ route('backend.skill-sections.index') }}" class="btn btn-danger ms-2">{{ __('Back') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $(document).ready(function () {
                $('#status').val("{{ $skillSection->status ?? 'Active' }}");
            });
        </script>
    </x-slot>
</x-layouts.backend>
