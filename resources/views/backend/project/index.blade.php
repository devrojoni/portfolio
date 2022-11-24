<x-layouts.backend>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-4 fw-bold text-center">{{ __('Project') }}</div>
                        <a href="{{ route('backend.projects.create') }}" class="btn btn-primary">{{ __('Add New') }}</a>
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
                                    <th class="text-center border-0">{{ __('Category') }}</th>
                                    <th class="text-center border-0">{{ __('Title') }}</th>
                                    <th class="text-center border-0">{{ __('Sub Title') }}</th>
                                    <th class="text-center border-0">{{ __('Image') }}</th>
                                    <th class="text-center border-0">{{ __('Status') }}</th>
                                    <th class="text-end border-0">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td class="text-start border-0">{{ $loop->iteration }}</td>
                                    <td class="text-center border-0">{{ $project->category->name ?? null }}</td>
                                    <td class="text-center border-0">{{ $project->title }}</td>
                                    <td class="text-center border-0">{{ $project->sub_title }}</td>
                                    <td class="text-center border-0"> <img src="{{ isset($project->image) ? asset($project->image) : ('https://via.placeholder.com/80/daeef8?text=' . setting('website_name')) }}" width="80" height="50" alt="Image" /></td>
                                    <td class="text-center border-0">{{ $project->status }}</td>
                                    <td class="text-end border-0">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <a href="{{ route('backend.projects.edit', $project->id) }}" class="btn btn-primary btn-sm ms-3"><i class="ph-note-pencil fs-5"></i></a>
                                            <form method="POST" action="{{ route('backend.projects.destroy', $project->id) }}" onsubmit="return confirm('Are you sure?');">
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