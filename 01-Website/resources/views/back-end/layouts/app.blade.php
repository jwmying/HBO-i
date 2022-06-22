
<!DOCTYPE html>
<html lang="nl">

    <head>
        <meta charset="utf-8" />
        <title>Titel | HBO-i</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="HBO-i description" name="description" /> 
        <meta content="42IN4SOi" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{ asset('back-end/images/favicon.ico') }}"> --}}

        <!-- App CSS -->
        <link href="{{ asset('back-end/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back-end/css/style.css') }}" rel="stylesheet" type="text/css" />

        <!-- Datatable CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap4.min.css">

        <!-- Select2 CSS -->
        <link href="{{ asset('back-end/plugins/select2/select2.min.css') }}" rel="stylesheet" />

        @livewireStyles
    </head>

    <body class="">
        
        <x-backend-nav/>

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <x-backend-topnav/>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    
                    @yield('content')
                    
                </div><!-- container -->

                <x-backend-footer/>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('back-end/js/jquery.min.js') }}"></script>
        <script src="{{ asset('back-end/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('back-end/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('back-end/js/waves.js') }}"></script>
        <script src="{{ asset('back-end/js/feather.min.js') }}"></script>
        <script src="{{ asset('back-end/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('back-end/js/moment.js') }}"></script>

        <!-- App JS -->
        <script src="{{ asset('back-end/js/app.js') }}"></script>

        <!-- Datatable JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap4.min.js"></script>

        <!-- CKEditor JS -->
        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

        <!-- Datatable JS -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @livewireScripts

        @yield('scripts')
    </body>

</html>