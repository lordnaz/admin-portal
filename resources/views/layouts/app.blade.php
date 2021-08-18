<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @isset($meta)
            {{ $meta }}
        @endisset

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@400;600;700&family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/notyf/notyf.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">

        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" /> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" /> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css" /> -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs4/1.1.0/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-select-bs4/1.3.3/select.bootstrap4.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/themes/prism.min.css" integrity="sha512-MnB+jPP0SRCdIWq7PGvYpgSIGniRZ4mxXgI/iwSY7EpZ5wp1OLhWxbPAYQukqAgam9891DIcDYJRFXkqjnj95Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <livewire:styles />

        <!-- Scripts -->
        <script defer src="{{ asset('vendor/alpine.js') }}"></script>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="main-wrapper">
                @include('components.navbar')
                @include('components.sidebar')
                @include('components.modal-wrapper')

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                      <div class="section-header">
                        @isset($header_content)
                            {{ $header_content }}
                        @else
                            {{ __('Halaman') }}
                        @endisset
                      </div>

                      <div class="section-body">
                        {{ $slot }}
                      </div>
                    </section>
                  </div>
            </div>
        </div>

        <footer class="main-footer" style="margin-top: 0px;">
            <div class="footer-left">
            Copyright &copy; 2021 <div class="bullet"></div> Powered By <a href="https://symplified.biz/">Symplified</a>
            </div>
            <div class="footer-right">
            1.1.0
            </div>
        </footer>

        @stack('modals')

        <!-- General JS Scripts -->
        <script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>
        <script defer async src="{{ asset('stisla/js/modules/popper.js') }}"></script>
        <script defer async src="{{ asset('stisla/js/modules/tooltip.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="{{ asset('stisla/js/modules/bootstrap.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/moment.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/marked.min.js') }}"></script>
        <script defer src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>
        <script defer src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/chart.min.js') }}"></script>
        <script defer src="{{ asset('vendor/select2/select2.min.js') }}"></script>

        <script src="{{ asset('stisla/js/stisla.js') }}"></script>
        <script src="{{ asset('stisla/js/scripts.js') }}"></script>

        <livewire:scripts />
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/select.bootstrap4.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js" integrity="sha512-KMnxpSoayrFfRyh5p/Cv1QgVnuHtw4X7Vn38aXYt90FUDo5lRxhNLYFNX3Nib8UVJIrTUm3p2b0bt7/9TnqzGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @isset($script)
            {{ $script }}
        @endisset
    </body>
</html>
