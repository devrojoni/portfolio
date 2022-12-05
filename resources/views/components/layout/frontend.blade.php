<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />

        <link href="{{ asset('assets/frontend/img/favicon.ico') }}" rel="icon" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.css" />
        <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" />
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <x-layout.frontend.menu />

        {{ $slot }}

        <x-layout.frontend.footer />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/typed/typed.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

        <x-flashify::scripts />
    </body>
</html>
