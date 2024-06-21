@extends('app')
@section('content')
@section('title', 'Create Barang')
<!-- BEGIN .app-main -->
<div class="app-main">

    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item home">
                            <a href="#">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Inputs</li>
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
                <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">Forms</div>
                        <div class="card-body">

                            <div class="row gutters">
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Gudang</label>
                                        <input class="form-control" placeholder="" type="text" name="gudang"
                                            required>
                                    </div>
                                    @error('gudang')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Ruangan</label>
                                        <input class="form-control" placeholder="" type="text" name="ruangan"
                                            required>
                                    </div>
                                    @error('ruangan')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Name Barang</label>
                                        <input class="form-control" placeholder="" type="text" name="nama_barang"
                                            required>
                                    </div>
                                    @error('nama_barang')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Jenis Barang</label>
                                        <input class="form-control is-valid" placeholder="" type="text"
                                            name="jenis_barang" required>
                                    </div>
                                    @error('jenis_barang')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Kode Barang</label>
                                        <input class="form-control is-warning" placeholder="" type="text"
                                            name="kode_barang" required>
                                    </div>
                                    @error('kode_barang')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Register</label>
                                        <input class="form-control is-invalid" placeholder="" type="text"
                                            name="register" required>
                                    </div>
                                    @error('register')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Select</label>
                                        <select class="form-control" name="kondisi_barang" required>
                                            <option selected>Pilih...</option>
                                            <option>Baik</option>
                                            <option>Kurang Baik</option>
                                            <option>Buruk</option>
                                        </select>
                                    </div>
                                    @error('kondisi_barang')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Lokasi Barang</label>
                                        <input class="form-control is-invalid" placeholder="" type="text"
                                            name="lokasi" required>
                                    </div>
                                    @error('lokasi')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label>Harga Barang</label>
                                        <input class="form-control is-invalid" placeholder="" type="text"
                                            name="harga_barang" step="0.01" min="0" required>
                                    </div>
                                    @error('harga_barang')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile2" name="image"
                                            required>
                                        <label class="custom-file-label custom-file-label-primary"
                                            for="customFile2">Image</label>
                                    </div>
                                    @error('image')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="pt-3 float-right">
                                <button type="submit" class="btn btn-success btn-lg">Save <i
                                        class="icon icon-drafts"></i></button>
                            </div>
                        </div>

                    </div>
            </div>
            </form>
            <!-- Card ends -->

        </div>
    </div>
    <!-- Row end -->

</div>
<!-- END: .main-content -->





</div>
<!-- END: .app-main -->
@endsection
