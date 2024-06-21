@extends('app')
@section('content')
@section('title', 'Table User')
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
                        <li class="breadcrumb-item active" aria-current="page">Data User</li>
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
                    <div class="card-header">Data User</div>
                    <div class="mb-3">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-lg">
                            <i class="icon icon-cog3"></i> Input User
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="basicExample" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->role }}</td>
                                        <td>
                                            <a href="{{ route('admin.user.edit', ['id' => $u->id]) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="icon-plus2"></i>
                                            </a>
                                            <a data-toggle="modal" data-target="#modalhapus{{ $u->id }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="icon-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    {{-- Modal untuk menghapus --}}
                                    <div class="modal fade" id="modalhapus{{ $u->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modalhapus" >
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalhapus">Konfirmasi Delete
                                                        Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus data User
                                                    <b>{{ $u->name }}</b>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('admin.user.delete', ['id' => $u->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Yaa
                                                            Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End of Modal --}}
                                @endforeach
                            </tbody>
                        </table>
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
