@section('body')
    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    @if(Request::is('home'))
                        <div class="d-sm-inline-block">
                            <img src="images/logo-only.png" id="logo-only">
                        </div>
                        &nbsp;
                        <div class="d-sm-inline-block">
                            <img src="images/logo-text.png" id="logo-text">
                        </div>
                    @else
                        <div class="navbar-nav nav-item">
                            <a class="nav-link" href="home" role="button">
                                <i class="fas fa-arrow-left fa-2x"></i>
                            </a>
                        </div>
                    @endif

                    <div class="navbar-nav nav-item ml-auto">
                        <!-- Nav Item - User Information -->
                        <a class="nav-link" href="profile" role="button">
                            <span class="mr-2 d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <i class="fas fa-user-circle fa-2x"></i>
                        </a>
                    </div>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @section('content')
                    @show

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="text-center">
                        <div class="float-left">
                            <a class="small" href="feedback"><i class="fas fa-question-circle"></i> Feedback</a>
                        </div>
                        <div class="float-right">
                            <span class="small">&copy; {{ config('app.name') }} 2019</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    </body>
@endsection
