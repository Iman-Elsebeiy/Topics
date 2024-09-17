<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- First Topic  -->
            @if ($topics->count() > 0)
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="custom-block bg-white shadow-lg">
                        <a href="{{ route('topic.details', $topics[0]->id) }}">
                            <div class="d-flex">
                                <div>
                                    <h5 class="mb-2">{{ $topics[0]->title }}</h5>
                                    <p class="mb-0">{{ Str::limit($topics[0]->content, 100) }}</p>
                                </div>
                                <span class="badge bg-design rounded-pill ms-auto">{{ $topics[0]->views }}</span>
                            </div>
                            <img src="{{ asset('assets/images/topics/'.$topics[0]->image)}}"
                                class="custom-block-image img-fluid" alt="{{ $topics[0]->title }}">
                        </a>
                    </div>
                </div>
            @endif

            <!-- Second Topic  -->
            @if ($topics->count() > 1)
                <div class="col-lg-6 col-12">
                    <div class="custom-block custom-block-overlay">
                        <div class="d-flex flex-column h-100">
                            <img src="{{ asset('assets/images/topics/'.$topics[1]->image) }}"
                                class="custom-block-image img-fluid" alt="{{ $topics[1]->title }}">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">{{ $topics[1]->title }}</h5>
                                    <p class="text-white">{{ Str::limit($topics[1]->content, 100) }}</p>
                                    <a href="{{ route('topic.details', $topics[1]->id) }}" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                </div>
                                <span class="badge bg-finance rounded-pill ms-auto">{{ $topics[1]->views }}</span>
                            </div>

                            <div class="social-share d-flex">
                                <p class="text-white me-4">Share:</p>
                                <ul class="social-icon">
                                    <li class="social-icon-item"><a href="#" class="social-icon-link bi-twitter"></a></li>
                                    <li class="social-icon-item"><a href="#" class="social-icon-link bi-facebook"></a></li>
                                    <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>
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