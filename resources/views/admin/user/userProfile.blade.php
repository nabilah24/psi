@extends('layout.masterAdmin')

@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Profile</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Profile</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="table-data">
            <div class="order">
                <form class="form-horizontal form-material mx-2">
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Full Name</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="Johnathan Doe" class="form-control ps-0 form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" placeholder="johnathan@admin.com"
                                class="form-control ps-0 form-control-line" name="example-email" id="example-email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Password</label>
                        <div class="col-md-12">
                            <input type="password" value="password" class="form-control ps-0 form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Phone No</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="123 456 7890" class="form-control ps-0 form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Message</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control ps-0 form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Select Country</label>
                        <div class="col-sm-12 border-bottom">
                            <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                <option>London</option>
                                <option>India</option>
                                <option>Usa</option>
                                <option>Canada</option>
                                <option>Thailand</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 d-flex">
                            <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                Profile</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="todo">
                <center class="mt-4"> <img src="{{ asset('assets/images/user/agent.jpg')}}" class="rounded-circle" width="300" />
                    <h4 class="card-title mt-2">Hanna Gover</h4>
                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                    <div class="row text-center justify-content-center">
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link">
                                <i class="icon-people" aria-hidden="true"></i>
                                <span class="value-digit">254</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link">
                                <i class="icon-picture" aria-hidden="true"></i>
                                <span class="value-digit">54</span>
                            </a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </main>
@endsection
