@include('include.top')

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('include.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('include.nav')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @include('include.header')

                    @yield('content')


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('include.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

@include('include.scroll')

@include('include.logoutM')

@include('include.bottom')