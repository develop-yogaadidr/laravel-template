@include('layout.header')

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @yield('content')
    </div>
</body>

@include('layout.footer')
