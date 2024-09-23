<!doctype html>
<html lang="en">
@include('includes.head-index') <!-- Specific head for index page -->
<body id="top">

    <main>
        @include('includes.navbar-index') <!-- Unique navbar for the homepage -->
        @include('includes.hero-index')   <!-- Unique hero section -->
        @include('includes.featured-index') <!-- Featured topics section -->
        @include('includes.explor-index')  <!-- Exploration section -->
        @include('includes.timeline-index') <!-- Timeline section -->
        @include('includes.faqs-index')     <!-- FAQs section -->
        @include('includes.testimonials')    <!-- Testimonials section -->
        @include('includes.contact-index')    <!-- Contact section -->
    </main>

    @include('includes.footer') <!-- Shared footer -->
    @include('includes.js') <!-- Shared JavaScript -->
</body>
</html>
