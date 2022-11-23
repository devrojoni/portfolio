<x-layouts.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="fs-4 fw-bold text-center">{{ isset($serviceSection) ? __('Update Service') : __('Add Service')}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{ isset($serviceSection) ? route('backend.service-sections.update', $serviceSection->id) : route('backend.service-sections.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($serviceSection) @method('PUT') @endisset
                        <div class="row">
                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Name')" 
                                name="name" 
                                id="name"
                                :value="$serviceSection->name ?? null"
                                required 
                            />

                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Image')"
                                type="file" 
                                name="image"
                                id="image"
                                :value="isset($serviceSection->image) ? asset($serviceSection->image) : null"
                                required
                            />
                        </div>
                        <div class="row">
                            <x-ui.input 
                                group="col-md-6" 
                                :label="__('Description')" 
                                name="description" 
                                id="description"
                                :value="$serviceSection->description ?? null"
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
                                <a href="{{ route('backend.service-sections.index') }}" class="btn btn-danger ms-2">{{ __('Back') }}</a>
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
            $('#status').val("{{$serviceSection->status ?? 'Active'}}");
            });
        </script>
    </x-slot>
</x-layouts.backend>