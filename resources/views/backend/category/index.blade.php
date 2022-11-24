<x-layouts.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-4 fw-bold text-center">{{ __('Category') }}</div>
                        <a href="{{ route('backend.categories.create') }}" class="btn btn-primary">{{ __('Add New') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-start border-0">{{ __('SL') }}</th>
                                    <th class="text-center border-0">{{ __('Name') }}</th>
                                    <th class="text-center border-0">{{ __('Slug') }}</th>
                                    <th class="text-center border-0">{{ __('Status') }}</th>
                                    <th class="text-end border-0">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td class="text-start border-0">{{ $loop->iteration }}</td>
                                    <td class="text-center border-0">{{ $category->name }}</td>
                                    <td class="text-center border-0">{{ $category->slug }}</td>
                                    <td class="text-center border-0">{{ $category->status }}</td>
                                    <td class="text-end border-0">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <a href="{{ route('backend.categories.edit', $category->id) }}" class="btn btn-primary btn-sm ms-3"><i class="ph-note-pencil fs-5"></i></a>
                                            <form method="POST" action="{{ route('backend.categories.destroy', $category->id) }}" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm"><i class="ph-trash fs-5"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>