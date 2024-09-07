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
                                    <li class="breadcrumb-item"><a href="{route('index')}">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                                </ol>
                            </nav>

                           <h2 class="text-white">Testimonials</h2>
                        </div>

                    </div>
                </div>
            </header>

            <section class="section-padding ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="mb-4">What Our clients Says?</h2>
                        </div>
                    </div>
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row mx-md-5">
                                    <div class="col-md-4 testimonials">
                                        <img class="d-block rounded-3"
                                            src="images/testimonials/janis-dzenis-jkvE9uJN3jk-unsplash.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                                        <h3>Jone Due<br><strong class="date">12/02/2019</strong></h3>
                                        <p class="text-muted">You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first. 
                                            <br>
                                            You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row mx-md-5">
                                    <div class="col-md-4 testimonials">
                                        <img class="d-block rounded-3"
                                            src="images/testimonials/janis-dzenis-oPRubjbiqKI-unsplash.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                                        <h3>Jone Due<br><strong class="date">12/02/2019</strong></h3>
                                        <p class="text-muted">You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first. 
                                            <br>
                                            You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row mx-md-5">
                                    <div class="col-md-4 testimonials">
                                        <img class="d-block rounded-3"
                                            src="images/testimonials/rocky-xiong-UE04nFCgDUE-unsplash.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="col-md-8 px-md-5 d-flex flex-column justify-content-center">
                                        <h3>Jone Due<br><strong class="date">12/02/2019</strong></h3>
                                        <p class="text-muted">You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first. 
                                            <br>
                                            You guys rock! Thank you for making it painless, pleasant and most of all hassle
                                            free! I wish I would have thought of it first.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                    </div>
                </div>
            </section>

           
        </main>

        @include('includes.footer')


        <!-- JAVASCRIPT FILES -->
        @include('includes.js')


    </body>
</html>