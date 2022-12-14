<!doctype html>
<html class="fixed sidebar-left-collapsed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Chief Minister's Micro Finance Scheme: Government of Nagaland</title>
    <meta name="keywords" content="scholarship,nagaland,government of nagaland,scholarship portal" />
    <meta name="description" content="Official Common Scholarship Portal of Nagaland">
    <meta name="author" content="Kezeneilhou Mhasi">
    <meta name="_token" content="{{ csrf_token() }}" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('dashboardAssets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboardAssets/vendor/pnotify/pnotify.custom.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('dashboardAssets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dashboardAssets/css/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('dashboardAssets/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dashboardAssets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('dashboardAssets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dashboardAssets/vendor/modernizr/modernizr.js') }}"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/megaphone/css/megaphone.css') }}">
    @livewireStyles
</head>

<body>



    <section class="body">

        <!-- start: header -->
        <header class="header">

            <div class="logo-container">
                <a href="{{ url('/') }}" class="logo">
                    <a href="/" class="logo"><img src="{{ asset('assets/img/cmmfi-logo-dash.png') }}"
                            height="50" /></a>
                </a>

                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>


            </div>
            {{--  --}}

            <!-- start: search & user box -->
            <div class="header-right">


                <span class="separator"></span>


                {{-- @livewire('megaphone') --}}

                <div id="userbox" class="userbox">

                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset('dashboardAssets/img/!logged-user.jpg') }}" alt="Joseph Doe"
                                class="rounded-circle"
                                data-lock-picture="{{ asset('dashboardAssets/img/!logged-user.jpg') }}" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">{{ Auth::user()->name }}</span>
                            <span class="role">{{ Auth::user()->role }}</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('dashboard') }}"><i
                                        class="bx bx-user-circle"></i> My Dashboard</a>
                            </li>
                            <li>
                                <a role="menuitem"  tabindex="-1"
                                    href="{{route('changePasswordForm')}}"><i class="bx bx-user-circle"></i> Change Password</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1"
                                    href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="bx bx-power-off"></i> Logout</a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                                {{ csrf_field() }}
                            </form>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">
                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
                        data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
                @include('dashboardPartials.menu')
            </aside>
            <!-- end: sidebar -->
            <section role="main" class="content-body pt-0">
                <header class="page-header">
                    <h2>DASHBOARD</h2>

                    <div class="right-wrapper text-right mr-4">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <i class="bx bx-home-alt"></i>
                                </a>
                            </li>
                            <li><span>DASHBOARD</span></li>
                        </ol>

                    </div>
                </header>


                @yield('content')

            </section>

            <!-- Modal -->

            <!-- Vendor -->
            <script src="{{ asset('dashboardAssets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/popper/umd/popper.min.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/bootstrap/js/bootstrap.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/common/common.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/nanoscroller/nanoscroller.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

            <!-- Specific Page Vendor -->
            <script src="{{ asset('dashboardAssets/vendor/jquery-ui/jquery-ui.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/jquery-appear/jquery.appear.js') }}"></script>

            <script src="{{ asset('dashboardAssets/vendor/pnotify/pnotify.custom.js') }}"></script>


            <!-- Theme Base, Components and Settings -->
            <script src="{{ asset('dashboardAssets/js/theme.js') }}"></script>

            <!-- Theme Custom -->
            <script src="{{ asset('dashboardAssets/js/custom.js') }}"></script>

            <!-- Theme Initialization Files -->
            <script src="{{ asset('dashboardAssets/js/theme.init.js') }}"></script>
            <script src="{{ asset('dashboardAssets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
            <!-- Examples -->
            <script src="{{ asset('dashboardAssets/js/examples/examples.dashboard.js') }}"></script>
            <!-- Examples -->

            <script src="{{ asset('dashboardAssets/js/examples/examples.modals.js') }}"></script>


            <script src="{{ asset('dashboardAssets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>

            <!-- datatable plugins -->
            <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>

            <script>
                $(function() {
                    $(".datepicker").datepicker({
                        changeYear: 'true',
                        changeMonth: 'true',
                        yearRange: "-100:+10",
                        dateFormat: 'dd-mm-yy'
                    });
                });
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.datatable').DataTable();
                });
            </script>
            @livewireScripts
</body>


</html>
