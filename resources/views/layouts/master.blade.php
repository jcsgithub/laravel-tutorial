<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head');
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @include('layouts.nav');
                
                @yield('content');
            </div>
        </div>
    </body>
</html>