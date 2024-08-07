<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ENV('APP_NAME')}} | @yield('title', 'Home')</title>

    <!-- stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/dist/main.css')}}" />
    {{-- <link rel="icon" type="image/png" href="{{asset('frontend/dist/images/favicon/favicon.png')}}" /> --}}
    <link rel="icon" type="image/png" href="{{asset('frontend/dist/images/favicon/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('frontend/fontawesome-free-5.15.4-web/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/js/owl/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/owl/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            /* Adjust this value based on your design */

        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown.active .dropdown-content {
            display: block;
        }
    </style>

    @yield('custom-style')
</head>

<body @yield('body-attr')>

    <body>
        @include('frontend.layouts.header')
        <main class="main">
            @yield('content')
        </main>
        @include('frontend.layouts.footer')

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl/owl.carousel.min.js') }}"></script>

        <script src="{{asset('frontend/src/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('frontend/src/scss/vendors/plugin/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/src/scss/vendors/plugin/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/src/scss/vendors/plugin/js/slick.min.js')}}"></script>
        <script src="{{asset('frontend/src/scss/vendors/plugin/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('frontend/src/js/app.js')}}"></script>
        <script src="{{asset('frontend/dist/main.js')}}"></script>

        <script src="{{ asset('assets/js/script.js') }}"></script>

        <script>
            function toggleDropdown(event) {
                event.preventDefault();
                var dropdown = document.getElementById('imageDropdown');
                dropdown.classList.toggle('active');
        
                // Close the dropdown when clicking somewhere else on the page
                document.body.addEventListener('click', function (e) {
                    if (!dropdown.contains(e.target)) {
                        dropdown.classList.remove('active');
                    }
                });
            }
        </script>
    
        {{-- TOASTER --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
        <script>
            @if(Session::has('success'))  
                    toastr.success("{{ Session::get('success') }}");  
                @endif  
                @if(Session::has('info'))  
                    toastr.info("{{ Session::get('info') }}");  
                @endif  
                @if(Session::has('warning'))  
                    toastr.warning("{{ Session::get('warning') }}");  
                @endif  
                @if(Session::has('error'))  
                    toastr.error("{{ Session::get('error') }}");  
                @endif  
        </script>
        
        @yield('custom-script')
    </body>
</body>

</html>
