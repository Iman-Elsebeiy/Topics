<!doctype html>
<html lang="en">

@include('includes.head')


<body id="top">

    <main>

    @include('includes.nav_index')



        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Discover. Learn. Enjoy</h1>

                        <h6 class="text-center">platform for creatives around the world</h6>

                        <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">

                                </span>

                                <input name="keyword" type="search" class="form-control" id="keyword"
                                    placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                                <button type="submit" class="form-control">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


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



<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">Browse Topics</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $category->id }}" data-bs-toggle="tab"
                            data-bs-target="#tab-pane-{{ $category->id }}" type="button" role="tab"
                            aria-controls="tab-pane-{{ $category->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{ $category->category_name }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    @foreach($categories as $category)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-pane-{{ $category->id }}" role="tabpanel"
                            aria-labelledby="tab-{{ $category->id }}" tabindex="0">
                            <div class="row">
                                @foreach($category->topics as $topic)
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                            <a href="{{ route('topic.details', $topic->id) }}">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">{{ $topic->title }}</h5>
                                                        <p class="mb-0">{{ Str::limit($topic->content, 50) }}</p>
                                                    </div>
                                                    <span class="badge bg-design rounded-pill ms-auto">{{ $topic->views }}</span>
                                                </div>
                                                <img src="{{ asset('assets/images/topics/' . $topic->image) }}" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>


        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">How does it work?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">Search your favourite topic</h4>

                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis, cumque magnam? Sequi, cupiditate quibusdam alias illum sed esse ad
                                        dignissimos libero sunt, quisquam numquam aliquam? Voluptas, accusamus omnis?
                                    </p>

                                    <div class="icon-holder">
                                        <i class="bi-search"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Bookmark &amp; Keep it for yourself</h4>

                                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint
                                        animi necessitatibus aperiam repudiandae nam omnis est vel quo, nihil repellat
                                        quia velit error modi earum similique odit labore. Doloremque, repudiandae?</p>

                                    <div class="icon-holder">
                                        <i class="bi-bookmark"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Read &amp; Enjoy</h4>

                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Animi vero quisquam, rem assumenda similique voluptas distinctio, iste est hic
                                        eveniet debitis ut ducimus beatae id? Quam culpa deleniti officiis autem?</p>

                                    <div class="icon-holder">
                                        <i class="bi-book"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <p class="text-white">
                            Want to learn more?
                            <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Frequently Asked Questions</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="{{asset('assets/images/faq_graphic.jpg') }}" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Topic Listing?
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to
                                            redistribute this template</strong> on any other template collection website
                                        without our permission. Please contact TemplateMo for more detail. Thank you.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to find a topic?
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can search on Google with <strong>keywords</strong> such as templatemo
                                        portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Does it need to paid?
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can modify any of this with custom CSS or overriding our default variables.
                                        It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
       
        @include('includes.testimonials')


        <section class="contact-section section-padding section-bg" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Get in touch</h2>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                        <h4 class="mb-3">Head office</h4>

                        <p>Bay St &amp;, Larkin St, San Francisco, CA 94109, United States</p>

                        <hr>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Phone</span>

                            <a href="tel: 305-240-9671" class="site-footer-link">
                                305-240-9671
                            </a>
                        </p>

                        <p class="d-flex align-items-center">
                            <span class="me-2">Email</span>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mx-auto">
                        <h4 class="mb-3">Dubai office</h4>

                        <p>Burj Park, Downtown Dubai, United Arab Emirates</p>

                        <hr>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Phone</span>

                            <a href="tel: 110-220-3400" class="site-footer-link">
                                110-220-3400
                            </a>
                        </p>

                        <p class="d-flex align-items-center">
                            <span class="me-2">Email</span>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@company.com
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')



            @include('includes.js')


</body>

</html>