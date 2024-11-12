
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />

    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <style>
        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
/* Header */
.header-container {
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 1000;
    background-color: #fff;
}

/* Sidebar */
.sidebar-container {
    width: 250px; /* Sidebar width */
    position: fixed;
    top: 60px; /* Matches header height */
    bottom: 0;
    left: 0;
    z-index: 900;
    background-color: #f8f9fa; /* Optional background */
    padding-top: 10px;
    overflow-y: auto;
}

/* Main Content */
.page-wrapper {
    margin-top: 60px; /* Matches header height */
    margin-left: 250px; /* Matches sidebar width */
    padding: 20px;
}

/* Reset any body or page-level margin */
body, .page {
    margin: 0;
    padding: 0;
}



    </style>

    <!-- Custom CSS for specific page.  -->
    @stack('page-styles')
    @livewireStyles
</head>
    <body>

     

        <div class="page">
            <!-- Header Section -->
            <header class="header-container">
                @include('layouts.body.header')
            </header>
    
            <!-- Sidebar Section -->
            <div class="sidebar-container">
                @include('layouts.body.navbar') <!-- Sidebar content -->
            </div>
    
            <!-- Main Content Section -->
            <div class="page-wrapper">
                <div>
                    @yield('content') <!-- Main content -->
                </div>
                @include('layouts.body.footer')
            </div>
        </div>
    

        

        <!-- Tabler Core -->
        <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
        {{--- Page Scripts ---}}
        @stack('page-scripts')

        @livewireScripts
    </body>
</html>
