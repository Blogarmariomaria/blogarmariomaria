<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    @yield('contenido')
    @include('layouts.footer')
</body>
</html>