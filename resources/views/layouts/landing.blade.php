<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.landing.head')
</head>

<body>
    <div class="boxed_wrapper">

        <!-- preloader -->
        <div class="preloader">
            <div class="boxes">
                <div class="box"><div></div><div></div><div></div><div></div></div>
                <div class="box"><div></div><div></div><div></div><div></div></div>
                <div class="box"><div></div><div></div><div></div><div></div></div>
                <div class="box"><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        <!-- preloader end -->

        @include('layouts.partials.landing.header')

        @yield('content')

        @include('layouts.partials.landing.footer')

        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
    </div>

    @include('layouts.partials.landing.scripts')
</body>
</html>