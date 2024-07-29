<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('build/assets/app-eb8be927.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts.navbar')
        @include('layouts.sidebar')



        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 pt-3">
                            <div class="card p-3">
                                @yield('content')
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <div class="col-md-12">

                    {{-- <div class="card card-widget widget-user shadow"> --}}

                        <div class="widget-user-header ">
                            <h3 class="widget-user-username">Alexander Pierce</h3>
                            <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                        </div>
                        <div>
                            <button type="button" class="btn btn-block btn-outline-danger btn-sm" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</button>
                        </div>

                </div>

            </div>
        </aside>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>



    <script src="{{ asset('build/assets/app-51983030.js') }}"></script>
</body>

</html>
