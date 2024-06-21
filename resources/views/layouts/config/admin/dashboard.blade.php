@extends('app')
@section('content')
@section('title', 'Dashboard')
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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget">
                    <i class="iconn icon-basket"></i>
                    <h3>{{ $userCount }}</h3>
                    <p>User</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: {{ $userProgress }}%;" aria-valuenow="{{ $userProgress }}"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget secondary">
                    <i class="iconn icon-bargraph"></i>
                    <h3>{{ $barangCount }}</h3>
                    <p>Jumlah Barang</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: {{ $barangProgress }}%;" aria-valuenow="{{ $barangProgress }}"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget">
                    <i class="iconn icon-wallet"></i>
                    <h3>#</h3>
                    <p>#</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: 48%;" aria-valuenow="48"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget">
                    <i class="iconn icon-map6"></i>
                    <h3>#</h3>
                    <p>#</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- END: .main-content -->

</div>
<!-- END: .app-main -->

@endsection
