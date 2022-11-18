<div>
    <form wire:submit.prevent="submit">
        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('Icon')"
                wire:model.defer="icon"
                name="icon"
                id="icon"
                required
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Url')"
                wire:model.defer="url"
                name="url"
                id="url"
                required
            />
        </div>

        <button type="submit" class="btn btn-primary mt-2">{{ __('Submit') }}</button>
    </form>
    <div class="table-responsive mt-3">
        <table class="table table-centered table-nowrap mb-0 rounded">
            <thead class="thead-light">
                <tr>
                    <th class="text-start border-0">{{ __('Icon') }}</th>
                    <th class="text-center border-0">{{ __('Url') }}</th>
                    <th class="text-end border-0">{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $data)
                <tr>
                    <td class="text-start border-0">{{ $data->icon }}</td>
                    <td class="text-center border-0">{{ $data->url }}</td>
                    <td class="text-end border-0">
                        <button wire:click="edit({{ $data->id }})" class="btn btn-primary btn-sm"><i class="ph-note-pencil fs-5"></i></button>
                        <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm"><i class="ph-trash fs-5"></i></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
