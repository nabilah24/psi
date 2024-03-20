@extends('layout.master')

@section('content')
    {{-- hero --}}
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Our Menu</h1>
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-decoration-none"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/menu">Menu</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- hero end --}}

    {{-- menu --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <form class="d-flex display-5 mb-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a href="#tab-1" class="btn btn-outline-light border-2 active" data-bs-toggle="pill">
                                <i class="bi bi-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a href="#tab-2" class="btn btn-outline-light border-2" data-bs-toggle="pill">
                                <i class="bi bi-view-list"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($menus as $menu)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="menu-item card rounded">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <div class="menu-item-content mx-auto">
                                            <div
                                                class="menu-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                <div class="menu-item-caption-content text-center text-white">
                                                    <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#menuModal{{ $menu->id }}"><i class="bi bi-eye-fill"></i></a>&nbsp
                                                    <a href="{{ route('addmenu.to.cart', $menu->id) }}" class="btn"><i
                                                            class="bi bi-cart-fill"></i></a>
                                                </div>
                                            </div>
                                            <img class="img-card-top img-fluid" style="min-height: 250px"
                                                src="{{ asset('/storage/gambar/' . $menu->gambar) }}" alt="...">
                                        </div>
                                        <div class="card-body text-center p-4">
                                            <a href=""
                                                class="card-text d-block h3 mb-2 text-decoration-none"><b>{{ $menu->nama_item }}</b></a>
                                            <span class="card-text me-1">Rp {{ $menu->harga }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="card mb-3 menu-list" style="max-width: 100%;">
                        <div class="row g-0">
                            @foreach ($menus as $menu)
                                <div class="col-md-4">
                                    <a href="" class="menu-thumbnail">
                                        <img src="{{ asset('/storage/gambar/' . $menu->gambar) }}"
                                            class="img-fluid rounded-start w-100" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <a href=""
                                            class="card-title d-block h1 mb-2 text-decoration-none"><b>{{ $menu->nama_item }}</b></a>
                                        <strong class="menu-price me-1">Rp {{ $menu->harga }}</strong> <br><br>
                                        <h5 class="text-body">Deskripsi :</h5>
                                        <p class="card-text text-body"> {{ $menu->deskripsi }}</p>
                                    </div>
                                </div>
                                <span class="icon-chart">
                                    <a href="{{ route('addmenu.to.cart', $menu->id) }}"><i class="bi bi-cart-fill"></i></a>
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- menu end --}}


{{-- menu-item-modals --}}
@foreach ($menus as $menu)
<div class="menu-modal modal fade" id="menuModal{{ $menu->id }}" tabindex="-1" aria-labelledby="menuModal{{ $menu->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="background: var(--light)">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <img src="{{ asset('/storage/gambar/' . $menu->gambar) }}" alt=""
                                class="img-fluid rounded mb-5" width="200px">
                            <div class="text-center p-4">
                                <a href="" class="d-block h3 mb-2 text-decoration-none"><b>Cimol</b></a>
                                <span class="me-1">Rp {{ $menu->harga}}</span>
                            </div>
                            <h5>Deskripsi :</h5>
                            <p class="mb-4">{{ $menu->deskripsi }}</p>
                            <a href="{{ route('addmenu.to.cart', $menu->id )}}"
                                class="btn btn-outline-primary align-items-center justify-content-center"><i
                                    class="bi bi-cart-fill"></i>Add to Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- menu-item-modals --}}

{{-- @endsection --}}
