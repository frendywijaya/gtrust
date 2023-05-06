<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gtrust Admin Panel | @yield('title')</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('admin/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/custom.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/jquery/jquery.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('admin/js/vendor/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/visualization/d3/d3_tooltip.js') }}"></script>


    <script src="{{ asset('admin/js/vendor/forms/inputs/imask.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
	<script src="{{ asset('admin/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
	<script src="{{ asset('admin/js/vendor/tables/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('admin/js/datatable_basic.js') }}"></script>
    <script src="{{ asset('admin/js/form_select2.js') }}"></script>
    <script src="{{ asset('admin/js/uploader_bootstrap.js') }}"></script>
    <!-- /theme JS files -->

    @yield('css')

</head>

<body>

    @include('admin.layout.navbar')

    <!-- page content -->
    <div class="page-content">

        @include('admin.layout.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                @include('admin.layout.page_header')

                @yield('content')

                @include('admin.layout.footer')

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>

    @yield('js')

</body>

</html>
