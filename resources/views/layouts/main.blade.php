<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.partials.navbar')

        @include('layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.partials.control-sidebar')

        @include('layouts.partials.footer')

    </div>   
    <!-- ./wrapper -->

    @include('layouts.partials.scripts')
    @include('sweetalert::alert')
</body>
</html>