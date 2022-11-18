<form method="POST" action="{{ route('backend.settings.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <x-ui.input
            group="col-12"
            :label="__('Company Name')"
            name="company_name"
            id="company_name"
            :value="setting('company_name')"
            required
        />

        <x-ui.input
            group="col-12"
            :label="__('Email')"
            type="email"
            name="company_email"
            id="company_email"
            :value="setting('company_email')"
            required
        />
    </div>

    <div class="row">
        <x-ui.input
            group="col-12"
            :label="__('Phone')"
            name="company_phone"
            id="company_phone"
            :value="setting('company_phone')"
            required
        />
    </div>

    <div class="row">
        <x-ui.input
            group="col-12"
            :label="__('Address')"
            name="company_address"
            id="company_address"
            :value="setting('company_address')"
            required
        />
    </div>

    <div class="row">
        <x-ui.input
            group="col-md-3"
            :label="__('Country')"
            name="company_country"
            id="company_country"
            :value="setting('company_country')"
        />

        <x-ui.input
            group="col-md-3"
            :label="__('State')"
            name="company_state"
            id="company_state"
            :value="setting('company_state')"
        />

        <x-ui.input
            group="col-md-3"
            :label="__('City')"
            name="company_city"
            id="company_city"
            :value="setting('company_city')"
        />

        <x-ui.input
            group="col-md-3"
            :label="__('Postcode')"
            name="company_postcode"
            id="company_postcode"
            :value="setting('company_postcode')"
        />

        <input type="hidden" name="tab" value="company" />
    </div>

    <button type="submit" class="btn btn-primary mt-2">{{ __('Update') }}</button>
</form>