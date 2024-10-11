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

        <!-- CSS for Toasts -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/toaster.css') }}">

        <!-- CSS for Google Fonts -->
        <link rel="stylesheet" href="{{ asset('assets/fonts/font.min.css') }}" />

        <!-- CSS for TW Elements -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/css/tw-elements.min.css') }}" />

        <!-- Tailwind Script -->
        <script type="text/javascript" src="{{ asset('assets/plugins/js/tailwind.min.js') }}"></script>
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    fontFamily: {
                        sans: ["Roboto", "sans-serif"],
                        body: ["Roboto", "sans-serif"],
                        mono: ["ui-monospace", "monospace"],
                    },
                },
                corePlugins: {
                    preflight: false,
                },
            };
        </script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans text-gray-900 antialiased">
        <div
            class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            {{ $slot }}
        </div>

        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('assets/plugins/js/jquery-3.7.1.js') }}"></script>
        <script src="{{ asset('assets/plugins/js/toaster.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>

        <!-- JS for TW Elements -->
        <script type="text/javascript" src="{{ asset('assets/plugins/js/tw-elements.umd.min.js') }}"></script>

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
                    "timeOut": "1000",
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
                        toastr.options.timeOut = 1000;
                        toastr.success("{{ Session::get('message') }}", "Success!");

                        break;
                    case 'warning':
                        toastr.options.timeOut = 1000;
                        toastr.warning("{{ Session::get('message') }}", "Warning!");

                        break;
                    case 'error':
                        toastr.options.timeOut = 1000;
                        toastr.error("{{ Session::get('message') }}", "Error!");

                        break;
                }
            @endif
        </script>
        @stack('custom-scripts')
    </body>

</html>
