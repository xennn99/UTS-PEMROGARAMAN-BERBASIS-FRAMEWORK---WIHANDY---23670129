<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.admin.head')
</head>

<body>

@hasSection('auth')
    {{-- Halaman tanpa sidebar (login) --}}
    @yield('auth')
@else
    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>

        {{-- Header / Menubar (topbar + sidebar) --}}
        @include('layouts.partials.admin.header')

        <!-- Start right Content here -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    {{-- Main Content --}}
                    @yield('content')

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            {{-- Footer --}}
            @include('layouts.partials.admin.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>
@endif

    {{-- Scripts --}}
    @include('layouts.partials.admin.scripts')

</body>

</html>