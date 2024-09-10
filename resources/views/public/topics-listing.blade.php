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
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Topics Listing</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Topics Listing</h2>
                        </div>

                    </div>
                </div>
            </header>


            <section class="section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h3 class="mb-4">Popular Topics</h3>
                        </div>
                        <div class="col-lg-8 col-12 mt-3 mx-auto">
                       @foreach($popularTopics as $top)
                            <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                                <div class="d-flex">
                                    <img src="{{asset('assets/images/topics/', $top->image)}}" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-topics-listing-info d-flex">
                                        <div>
                                            <h5 class="mb-2">{{$top->title}}</h5>

                                            <p class="mb-0">{{ Str::limit($top->content, 100) }}</p>

                                            <a href="{{ route('topic.details', $top->id) }}" class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                        </div>

                                        <span class="badge bg-design rounded-pill ms-auto">{{$top->views}}</span>
                                    </div>
                                </div>
                            </div>
                         @endforeach

                        <div class="col-lg-12 col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding section-bg">
               <div class="container">
                    <div class="row">

            <div class="col-lg-12 col-12">
                <h3 class="mb-4">Trending Topics</h3>
            </div>

            <!-- Check if there is at least one topic -->
            @if ($topics->count() > 0)
                <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg">
                        <a href="{{ route('topic.details', $topics[0]->id) }}">
                            <div class="d-flex">
                                <div>
                                    <h5 class="mb-2">{{ $topics[0]->title }}</h5>
                                    <p class="mb-0">{{ Str::limit($topics[0]->content, 100) }}</p>
                                </div>
                                <span class="badge bg-finance rounded-pill ms-auto">{{ $topics[0]->views }}</span>
                            </div>
                            <img src="{{ asset('assets/images/topics/' . $topics[0]->image) }}" class="custom-block-image img-fluid" alt="{{ $topics[0]->title }}">
                        </a>
                    </div>
                </div>
            @endif

            <!-- Check if there is a second topic -->
            @if ($topics->count() > 1)
                <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                    <div class="custom-block custom-block-overlay">
                        <div class="d-flex flex-column h-100">
                            <img src="{{ asset('assets/images/topics/' . $topics[1]->image) }}" class="custom-block-image img-fluid" alt="{{ $topics[1]->title }}">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">{{ $topics[1]->title }}</h5>
                                    <p class="text-white">{{ Str::limit($topics[1]->content, 100) }}</p>
                                    <a href="{{ route('topic.details', $topics[1]->id) }}" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                </div>
                                <span class="badge bg-finance rounded-pill ms-auto">{{ $topics[1]->views }}</span>
                            </div>

                            <div class="social-share d-flex mt-3">
                                <p class="text-white me-4">Share:</p>
                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-pinterest"></a>
                                    </li>
                                </ul>
                                <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                            </div>

                            <div class="section-overlay"></div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</section>

        </main>

        @include('includes.footer')


        <!-- JAVASCRIPT FILES -->
        @include('includes.js')


    </body>
</html>