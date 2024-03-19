<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- title --}}
    <title>Cimal Cimol</title>

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- boxicons --}}
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    {{-- sidebar --}}
    <section id="sidebar">
        <a href="/" class="brand">
            <img src="{{ asset('assets/images/logo/brand.png') }}" alt="">
            <span class="text">Cimal Cimol!</span>
        </a>
        <ul class="side-menu top">
            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="/dashboard" ">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.maps') ? 'active' : '' }}">
                <a href="/maps">
                    <i class='bx bxs-map'></i>
                    <span class="text">Maps</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.userProfile') ? 'active' : '' }}">
                <a href="/userProfile">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">User Profile</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.tables') ? 'active' : '' }}">
                <a href="/tables">
                    <i class='bx bx-list-ul'></i>
                    <span class="text">Tables</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.user') ? 'active' : '' }}">
                <a href="/user ">
                    <i class='bx bxs-user-account'></i>
                    <span class="text">User Data</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('adminMenu.index') || request()->routeIs('adminMenu.edit') || request()->routeIs('adminMenu.show') || request()->routeIs('adminMenu.create') ? 'active' : '' }}">
                <a href="/adminMenu">
                    <i class='bx bxs-food-menu' ></i>
                    <span class="text">Menu List</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-run'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    {{-- sidebar end --}}

    {{-- section content --}}
    <section id="content">
        {{-- navbar --}}
        <nav>
            <i class='bx bx-menu'></i>
            <a href="/home" class="nav-link">Home</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <div class="profile">
                <img src="{{ asset('assets/images/user/agent.jpg') }}">
            </div>
            <a href="/userProfile" class="user">
                {{-- {{ auth()->user()->name }} --}}Admin
            </a>
        </nav>
        {{-- navbar end --}}
        @yield('content')
    </section>

    @yield('scripts')

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

    {{-- custom js --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
