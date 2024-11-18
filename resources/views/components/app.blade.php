<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <title>{{ config('app.name', 'EzyLink') }}</title>
   
    <link rel="stylesheet" href={{ asset('assets/css/theme-ecf0ae99.css') }}>
    <script type="module" crossorigin src={{ asset('assets/js/theme-9c065fc6.js') }} defer></script>
    <script src="{{ asset('assets/js/sweetalert2@11.js') }}" defer></script>


    {{-- <link rel="modulepreload" crossorigin href="{{ asset("assets/js/colors-4fe812b9.js") }}"> --}}
    {{-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self' data:; font-src 'self' data:;"> --}}
    @stack('css')
</head>
<body>
    @includeIf('components.alert')
    <x-sidebar />
    <div class="min-h-screen flex flex-col lg:ps-64 w-full">
        <x-header />
        <main>
            {{ $slot }}
        </main>
        <x-footer />
        <button
            class="fixed bottom-18 end-4 z-50 inline-flex h-10 w-10 items-center justify-center rounded-full bg-primary/20 text-primary opacity-0 backdrop-blur-xl transition-all duration-500 lg:bottom-4 print:hidden"
            data-toggle="back-to-top">
            <i class="ti ti-chevron-up text-xl"></i>
        </button>
    </div>
    @stack('js')
</body>
</html>
