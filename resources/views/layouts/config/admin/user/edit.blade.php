@extends('app')
@section('content')
@section('title', 'Update User')
<!-- BEGIN .app-main -->
<div class="app-main">


    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item home">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Update</li>
                    </ol>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="daterange-container">
                        <div id="reportrange" class="form-control">
                            <span></span> <i class="icon-chevron-down down-arrow"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END: .main-heading -->


    <!-- BEGIN .main-content -->
    <div class="main-content">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-sm-12">

                <!-- Card starts -->
                <div class="card">
                    <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" name="nama" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="role" >
                                            <option selected value="{{ $user->role }}">Pilih....</option>
                                            <option>admin</option>
                                            <option>user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Card ends -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- END: .main-content -->


</div>
<!-- END: .app-main -->
@endsection
