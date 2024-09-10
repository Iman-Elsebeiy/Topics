<!doctype html>
<html lang="en">
    @include('includes.head')

    <body class="topics-listing-page" id="top">

        <main>

            @include('includes.nav')

            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Homepage</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                </ol>
                            </nav>
                            <h2 class="text-white">Testimonials</h2>
                        </div>
                    </div>
                </div>
            </header>

            @include('includes.testimonials')

        </main>

        @include('includes.footer')
        @include('includes.js')

    </body>
</html>
