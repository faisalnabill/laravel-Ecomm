<!doctype html>
<html lang="en" data-bs-theme="auto">


<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title',config('app.name')) </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{asset('\css\bootstrap.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/css/bootstrap.css')}}" rel="stylesheet">
    @stack('css')

    <style>
        .bg-custom {
    background-color: #4D4D4D;
        }
    </style>
</head>

<body>


    <header data-bs-theme="dark">
    <nav class="navbar navbar-expand navbar-dark bg-custom" aria-label="Second navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample02">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                    <form role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>

                            </ul>
                        </li>
                        <!-- طريقة للعرض باستخدام السيكشن داخل ال layouts -->
                        @section('nav')
                        {{-- <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li> --}}
                        @show

                        {{--  <li>   <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">

                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>

                            </ul>
                        </li>--}}
                        {{--<li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>

                            </ul>
                        </li>--}}
                    {{--  <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li> --}}
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                    {{--   <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <!--<img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">--> <span class="d-none d-sm-inline mx-1">account</span>
                        </a> --}}
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                    @yield('sidebar')
                </div>
            </div>




            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- معناها يعرض سيكشن معين -->
                @yield('content')
            </main>
        </div>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="{{asset('dashboard.js')}}"></script>
    @stack('js')
</body>

</html>
