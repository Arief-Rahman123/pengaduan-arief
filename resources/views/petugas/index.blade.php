@extends('_partial.content')
@section('title', 'Petugas Desa Bitung Sari')
@section('title_content', 'Tambahkan Petugas')
@section('content')
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Masukkan Data Petugas!</h4>
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <label>Nama Petugas:</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="nama_petugas" class="form-control"
                                                placeholder="Nama Petugas">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label>No Telp:</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="telp" class="form-control"
                                                placeholder="No Telp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label>Username:</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label>Password:</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 offset-md-4">
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-7">
            <div class="card-header text-center font-bold">Data Petugas</div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>No Telp</th>
                        </tr>
                    </thead>
                    @foreach ($petugas as $item)
                    <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_petugas }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->telp }}</td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
