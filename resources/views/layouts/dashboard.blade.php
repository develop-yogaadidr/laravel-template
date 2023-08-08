@include('layouts.headers.header')

<body class="antialiased">
    <div id="wrapper">
        @include('layouts.navbars.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('layouts.navbars.navbar')

                <div class="container-fluid">
                </div>
            </div>
        </div>

        @yield('content')
    </div>
</body>

@include('layouts.footers.footer')
