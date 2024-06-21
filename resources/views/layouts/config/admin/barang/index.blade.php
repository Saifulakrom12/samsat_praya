@extends('app')
@section('content')
@section('title', 'Table Barang')
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
                        <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
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
                <div class="card">
                    <div class="card-header">Data Barang</div>
                    <div class="mb-3">
                        <a href="" class="btn btn-primary btn-lg">
                            <i class="icon icon-cog3"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="basicExample" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gudang</th>
                                    <th>Ruangan</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Register</th>
                                    <th>Kondisi Barang</th>
                                    <th>Lokasi</th>
                                    <th>Harga</th>
                                    <th>Image</th>
                                    <th>QR</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->gudang }}</td>
                                        <td>{{ $d->ruangan }}</td>
                                        <td>{{ $d->nama_barang }}</td>
                                        <td>{{ $d->jenis_barang }}</td>
                                        <td>{{ $d->kode_barang }}</td>
                                        <td>{{ $d->register }}</td>
                                        <td>{{ $d->kondisi_barang }}</td>
                                        <td>{{ $d->lokasi }}</td>
                                        <td>{{ $d->harga_barang }}</td>
                                        <td>
                                            <button type="button" class="btn" data-toggle="modal"
                                                data-target="#modalimage{{ $d->id }}">
                                                <img src="{{ asset('storage/photo-image/' . $d->image) }}"
                                                    alt="" width="50">
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn" data-toggle="modal"
                                                data-target="#modalqr{{ $d->id }}">{!! DNS2D::getBarcodeHTML("$d->qr", 'QRCODE', 3, 3) !!}</button>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- modal image -->
                        @foreach ($data as $d)
                            <div class="modal fade" id="modalimage{{ $d->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalimage">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalimage">Gambar Barang</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('storage/photo-image/' . $d->image) }}"
                                                alt="Gambar Barang" width="200">
                                            <b></b>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- end modal image -->

                        <!-- modal qr -->
                        @foreach ($data as $d)
                            <div class="modal fade" id="modalqr{{ $d->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalqr">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalqr">QRCODE</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div style="display: flex; justify-content: center;">
                                                <!-- Tambahkan gaya untuk mengatur tata letak vertikal -->
                                                {!! DNS2D::getBarcodeHTML("$d->qr", 'QRCODE', 9, 9) !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- end modal qr -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Row ends -->

    </div>
    <!-- END: .main-content -->

</div>
<!-- END: .app-main -->
@endsection
