<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">



@include('superadmin.layouts.header')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('superadmin.layouts.topbar')
        @include('superadmin.layouts.sidebar')


        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            @include('superadmin.layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    @include('superadmin.layouts.backtotop')

    @include('superadmin.layouts.preloader')


    @include('superadmin.layouts.themesettings')


    @include('superadmin.layouts.scripts')


    <script>
        @yield('scripts')
    </script>

</body>



</html>
