<x-layouts.backend>
    <div class="row">
        <div class="col-lg-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <img src="{{ auth()->user()->profileImage }}" class="img-fluid rounded" width="250" height="250" alt="user" />
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link {{ $tab == 'profile' ? 'active' : '' }}" id="profile"
                                href="{{ route('backend.profile.index', 'profile') }}" role="tab">{{__('Profile')}}</a>
                            <a class="nav-item nav-link {{ $tab == 'edit_profile' ? 'active' : '' }}" id="edit_profile"
                                href="{{ route('backend.profile.index','edit_profile') }}" role="tab">{{__('Edit')}}</a>
                            <a class="nav-item nav-link {{ $tab == 'change_password' ? 'active' : '' }}"
                                id="change_password" href="{{ route('backend.profile.index','change_password') }}"
                                role="tab">{{__('Change Password')}}</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @if($tab == 'profile')
                            <div class="tab-pane fade active show" id="profile" role="tabpanel">
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{ 'Name' }}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->name }}
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{ 'Email' }}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->email }}
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{ 'Phone' }}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->phone }}
                                    </div>
                                </div>
                                <div class="row boder-bottom py-2">
                                    <div class="col-sm-3">
                                        {{ 'Username' }}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->username }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($tab == 'edit_profile')
                            <div class="tab-pane fade active show" id="edit_profile" role="tabpanel">
                                <form action="{{ route('backend.profile.update', auth()->id() ) }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PUT')
                                    <div class="row">
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('Name')"
                                            type="text"
                                            name="name"
                                            id="name"
                                            :value="auth()->user()->name ?? null"
                                        />
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('Email')"
                                            type="email"
                                            name="email"
                                            id="email"
                                            :value="auth()->user()->email ?? null"
                                        />
                                    </div>
                                    <div class="row">
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('Phone')"
                                            type="text"
                                            name="phone"
                                            id="phone"
                                            :value="auth()->user()->phone ?? null"
                                        />
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('Username')"
                                            type="text"
                                            name="username"
                                            id="username"
                                            :value="auth()->user()->username ?? null"
                                        />
                                    </div>
                                    <div class="row">
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('Image')"
                                            type="file"
                                            name="image"
                                            id="image"
                                            :value="auth()->user()->image ?? null"
                                            accept="image/*"
                                        />  
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary mt-2">{{ __('Update') }}</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                        @if($tab == 'change_password')
                            <div class="tab-pane fade active show" id="change_password" role="tabpanel">
                                <form action="{{ route('backend.change.password', auth()->user()->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('Current Password')"
                                            type="password"
                                            name="current_password"
                                            id="current_password"
                                        />
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('New Password')"
                                            type="password"
                                            name="password"
                                            id="password"
                                        />
                                        <x-ui.input 
                                            group="col-lg-12"
                                            :label="__('Confirm Password')"
                                            type="password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                        /> 
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary mt-2">{{ __('Update') }}</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>