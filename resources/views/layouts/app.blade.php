<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/plugins/css/toaster.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])

    </head>

    <body class="text-gray-800 font-inter">
        <!-- start: Header -->
        @include('layouts.header')
        <!-- end: Header -->

        <!-- start: Sidebar -->
        @include('layouts.sidebar')
        <!-- end: Sidebar -->

        <!-- start: Main -->
        <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
            {{ $slot }}
        </main>
        <!-- end: Main -->

        <!-- start: Footer -->
        {{-- @include('layouts.footer') --}}
        <!-- end: Footer -->

        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('assets/plugins/js/jquery-3.7.1.js') }}"></script>
        <script src="{{ asset('assets/plugins/js/toaster.js') }}"></script>

        <script type="text/javascript">
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "200",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                switch (type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}", "Info!");
                        break;

                    case 'success':
                        toastr.options.timeOut = 10000;
                        toastr.success("{{ Session::get('message') }}", "Success!");

                        break;
                    case 'warning':
                        toastr.options.timeOut = 10000;
                        toastr.warning("{{ Session::get('message') }}", "Warning!");

                        break;
                    case 'error':
                        toastr.options.timeOut = 10000;
                        toastr.error("{{ Session::get('message') }}", "Error!");

                        break;
                }
            @endif
        </script>
        @stack('custom-scripts')
    </body>

</html>
