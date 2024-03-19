<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- title --}}
    <title>CimalCimol</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- jquery --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
</head>

<body>
    <div class="wrapper">
        <div class="top-navbar">
            <div class="logo">
                <img src="{{ asset('assets/images/logo/nav-brand.png') }}" alt="" class="navbar-brand">
            </div>
            <div class="top-menu">
                <div class="home-link">
                    <a href="/" class="btn">
                        <span class="icon"><i class="bi bi-house-door-fill"></i></span>
                        <span>Home</span>
                    </a>
                </div>
                <div class="right-info">
                    <div class="home-link">
                        {{-- <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <i class="bi bi-search"></i>
                        </form> --}}
                        <div class="dropdown">
                            <img class="dropdown-toggle avatar avatar-sm rounded-circle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" alt="Image placeholder"
                                src="{{ asset('assets/images/team-1-800x800.jpg') }}">
                            <ul class="dropdown-menu" style="background: #800020">
                                <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-person-fill"></i>
                                        <span>My profile</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-gear-fill"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-calendar-week"></i>
                                        <span>Activity</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-headset"></i>
                                        <span>Support</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-door-open-fill"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-body">
            <div class="sidebar-menu">
                <div class="inner-sidebar-menu">
                    <ul>
                        <li class="sub-menu">
                            <a href="">
                                <span class="icon"><i class="bi bi-tv"></i></span>
                                <span class="list">Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <span class="icon"><i class="bi bi-geo-alt-fill" style="color: orangered"></i></span>
                                <span class="list">Maps</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <span class="icon"><i class="bi bi-person-fill text-warning"></i></span>
                                <span class="list">User profile</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <span class="icon"><i class="bi bi-list-ul text-danger"></i></span>
                                <span class="list">Tables</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <span class="icon"><i class="bi bi-house-lock-fill text-info"></i></span>
                                <span class="list">Tables</span>
                                <i class="bi bi-caret-down-fill right"></i>
                            </a>
                            <ul>
                                <li class="sub-menu">
                                    <a href="">
                                        <span class="icon"><i class="bi bi-house-lock-fill text-info"></i></span>
                                        <span class="list">User</span>
                                    </a>
                                </li>
                                <li class="sub-menu">
                                    <a href="">
                                        <span class="icon"><i class="bi bi-house-lock-fill text-info"></i></span>
                                        <span class="list">Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="">
                                <span class="icon"><i class="bi bi-person-circle"
                                        style="color: palevioletred"></i></span>
                                <span class="list">Register</span>
                            </a>
                        </li>
                    </ul>

                    <div class="hamburger">
                        <div class="inner-hamburger">
                            <span class="arrow">
                                <i class="bi bi-arrow-left-short"></i>
                                <i class="bi bi-arrow-right-short"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')

    <script>
        $(document).ready(function() {
            $(".hamburger").click(function() {
                $(".wrapper").toggleClass("active");
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.sub-menu ul').hide();
            $(".sub-menu a").click(function(event) {
                event.preventDefault(); // Mencegah tindakan default dari tautan
                $(this).parent(".sub-menu").children("ul").slideToggle("100");
                $(this).find(".right").toggleClass("bi-caret-up-fill bi-caret-down-fill");
            });
        });
    </script>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

    {{-- custom js --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('scripts')
</body>

</html>
