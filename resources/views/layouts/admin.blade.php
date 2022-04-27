<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <title>{{ trans('panel.site_title') }}</title>
    @livewireStyles
</head>

<body class="text-blueGray-800 antialiased">

<noscript>You need to enable JavaScript to run this app.</noscript>

<div id="app">
    <x-sidebar/>

    <div class="relative md:ml-64 bg-gray-300  min-h-screen">
        <div class="relative bg-gray-500">
        </div>
        <div class="relative p-4 mx-auto w-full min-h-full">
            @yield('content')

            <x-footer/>
        </div>
    </div>

</div>

<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@livewireScripts
@yield('scripts')
@stack('scripts')
</body>

</html>