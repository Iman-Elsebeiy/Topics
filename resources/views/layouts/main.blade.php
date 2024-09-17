<!doctype html>
<html lang="en">
@include('includes.head') 
    <body class="topics-listing-page" id="top">

        <main>
        @include('includes.nav')
        @include('includes.header')
        @yield('content')
        </main>

@include('includes.footer')
@include('includes.js')

</body>
</html>