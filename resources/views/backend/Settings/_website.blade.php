<form action="{{ route('backend.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="row">
        <x-ui.input
            group="col-md-6"
            :label="__('Site Name')"
            name="website_name"
            :value="setting('website_name')"
            id="website_name"
            required
        />

        <x-ui.input
            group="col-md-6"
            :label="__('Site Title')"
            name="website_title"
            id="website_title"
            :value="setting('website_title')"
            required
        />
    </div>

    <div class="row">
        <x-ui.input
            group="col-md-6"
            :label="__('Site Logo')"
            type="file"
            name="logo"
            id="logo"
            :value="asset(setting('logo'))"
            accept="image/*"
        />

        <x-ui.input
            group="col-md-6"
            :label="__('Favicon')"
            type="file"
            name="favicon"
            id="favicon"
            :value="asset(setting('favicon'))"
            accept="image/*"
        />
    </div>

    <div class="row">
        <x-ui.input
            group="col-12"
            :label="__('Site Description')"
            type="textarea"
            name="website_description"
            id="website_description"
            :value="setting('website_description')"
            required
        />
    </div>

    <div class="row">
        <x-ui.input
            group="col-md-4"
            :label="__('Copyright Name')"
            name="copyright_name"
            id="copyright_name"
            :value="setting('copyright_name')"
            required
        />

        <x-ui.input
            group="col-md-4"
            :label="__('Copyright Year')"
            name="copyright_year"
            id="copyright_year"
            :value="setting('copyright_year')"
            required
        />

        <x-ui.input
            group="col-md-4"
            :label="__('Copyright Link')"
            name="copyright_link"
            id="copyright_link"
            :value="setting('copyright_link')"
            required
        />
        <input type="hidden" name="tab" value="website" />
    </div>

    <button type="submit" class="btn btn-primary mt-2">{{ __('Update') }}</button>
</form>