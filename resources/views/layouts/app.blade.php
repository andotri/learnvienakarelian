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
                            <img src="{{ asset('images/logo-image.png') }}" id="logo-image">
                        </div>
                        &nbsp;
                        <div class="d-sm-inline-block">
                            <img src="{{ asset('images/logo-text.png') }}" id="logo-text">
                        </div>
                    @else
                        <div class="navbar-nav nav-item">
                            <a class="nav-link" href="{{ URL::to('/') }}/home" role="button">
                                <i class="fas fa-arrow-left fa-2x"></i>
                            </a>
                        </div>
                    @endif

                    <div class="navbar-nav nav-item ml-auto">
                        <!-- Nav Item - User Information -->
                        <a class="nav-link" href="{{ URL::to('/') }}/profile" role="button">
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
                            <a class="small" href="{{ URL::to('/') }}/feedback"><i class="fas fa-question-circle"></i> @lang('default.feedback')</a>
                        </div>
                        <div class="float-right">
                            <span class="small">&copy; {{ config('app.name') }}</span>
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

    </body>
@endsection
