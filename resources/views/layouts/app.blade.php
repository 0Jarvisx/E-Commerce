<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>E-commerce - @yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>


@yield('contenido')