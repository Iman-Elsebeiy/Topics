<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Homepage</a></li>
                        @yield('breadcrumb') <!-- Dynamic breadcrumb navigation -->
                    </ol>
                </nav>
                <h2 class="text-white">@yield('page-title')</h2> <!-- Dynamic page title -->
            </div>
            @hasSection('header-image')
                <div class="col-lg-5 col-12">
                    <div class="topics-detail-block bg-white shadow-lg">
                        @yield('header-image') <!-- Dynamic header image for specific pages -->
                    </div>
                </div>
            @endif
        </div>
    </div>
</header>
