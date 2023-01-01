<!DOCTYPE html>
<html lang="en">

    
@include('backend.layout.head')
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            @include('backend.layout.topbar')
            <!-- end Topbar -->
            
            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.layout.sidebar')
                <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    @yield('admin')
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

                <!-- Footer Start -->
                @include('backend.layout.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
      

        <!-- Vendor js -->
        @include('backend.layout.script')

    </body>


</html>