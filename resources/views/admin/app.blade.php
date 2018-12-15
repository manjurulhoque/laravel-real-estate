<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.partials.header')

</head>

<body id="page-top">


@include('admin.partials.navbar')

<div id="wrapper">

    @include('admin.partials.sidebar')

    <div id="content-wrapper">

        <div class="container-fluid">

            @yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.partials.javascripts')

</body>
</html>
