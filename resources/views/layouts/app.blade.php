<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>Laravel</title>

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/argon-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style id="dynamic-fonts"></style>
</head>

<body class="{{ $class ?? '' }}">
    <div id="loader"></div>
    <div id="content" style="visibility: hidden;">
        @yield('content')
    </div>

    <!-- Include Bootstrap JS for dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

    <!-- Core JS Files -->
    <script src="{{ asset('assets/js/argon-dashboard.js') }}" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load the font dynamically
            var fontLink = document.createElement('link');
            fontLink.rel = 'stylesheet';
            fontLink.href = 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700';
            document.head.appendChild(fontLink);

            // Add dynamic font CSS
            var fontCSS = `
                @font-face {
                    font-family: 'Nucleo Icons';
                    src: url('{{ asset('assets/fonts/nucleo-icons.woff2') }}') format('woff2'),
                         url('{{ asset('assets/fonts/nucleo-icons.woff') }}') format('woff');
                    font-weight: normal;
                    font-style: normal;
                    font-display: swap;
                }
            `;
            document.getElementById('dynamic-fonts').innerHTML = fontCSS;

            // Show content and hide loader when the page is fully loaded
            window.addEventListener('load', function() {
                document.querySelector("#loader").style.display = "none";
                document.querySelector("#content").style.visibility = "visible";
            });
        });

        // Scrollbar initialization logic (if needed)
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- GitHub buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    @stack('js')
</body>

</html>
