<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{ setting('website_title') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="{{ setting('website_title') }}">
<meta name="author" content="{{ setting('website_name') }}">
<meta name="description"
    content="{{ setting('website_description') }}">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ setting('website_title') }}">
<meta property="og:description"
    content="{{ setting('website_description') }}">
<meta property="og:image"
    content="{{ asset(setting('logo')) }}">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ setting('website_title') }}">
<meta property="twitter:description"
    content="{{ setting('website_description') }}">
<meta property="twitter:image"
    content="{{ asset(setting('logo')) }}">
<link rel="icon" type="image/png" sizes="32x32"
    href="{{ asset(setting('favicon')) }}">
<link type="text/css" href="{{ asset('assets/backend/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/backend/vendor/notyf/notyf.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.css" />
<link type="text/css" href="{{ asset('assets/backend/css/volt.css') }}" rel="stylesheet">
<livewire:styles />
