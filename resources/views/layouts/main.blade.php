<!doctype html>
<html lang="en">
@include('includes.head') 
<body class="topics-listing-page" id="top">

    <main>
        @include('includes.nav') <!-- Common navigation for all pages -->
        @include('includes.header') <!-- Include the header for all general pages -->
        @yield('content') <!-- Placeholder for page-specific content -->
    </main>

    @include('includes.footer') <!-- Shared footer -->
    @include('includes.js') <!-- Shared JavaScript -->
</body>
</html>
