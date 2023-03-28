@extends('_partial.top')
@section('title', 'PEMAS | Pengaduan Masyarakat')
@section('title_content', 'Detail Laporan Anda')
<div id="app">
    <div class="container">
        <div class="page-heading mt-3">
        </div>
        <div class="page-content">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Pengaduan ( {{ $data->judul_pengaduan }})</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="col-md-12 col-12">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Nama Pelapor </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->masyarakat->nama }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Judul Pengaduan </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->judul_pengaduan }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Tanggal Kejadian </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->tanggal_kejadian }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Sifat </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->kategori }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Isi Pengaduan </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <textarea name="isi_pengaduan" class="form-control mb-2 @error('isi_pengaduan') @enderror" cols="30" rows="5"
                                                                    readonly>{{ $data->isi_pengaduan }}</textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Status Laporan</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <b>:@if ($data->status === '0')
                                                                        <div class="badge bg-danger">Pending</div>
                                                                    @elseif($data->status == 'proses')
                                                                        <div class="badge bg-warning text-white">Proses</div>
                                                                    @else
                                                                        <div class="badge bg-success">Selesai</div>
                                                                    @endif
                                                                </b>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary me-1 mb-1">
                                                                    Back</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <b>Foto / Berkas Pengaduan :</b>
                                <img src="{{ asset('berkas/pengaduan/' . $data->file) }}"
                                    style="width:100%;border:1px solid rgb(223, 223, 223);">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tanggapan Petugas</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="col-md-12 col-12">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form form-horizontal">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Nama Petugas </label>
                                                            </div>
                                                            <div class="col-md-7 mb-2">
                                                                <b>: {{ $tanggapan->petugas->nama_petugas }}</b>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>Tanggal Tanggapan </label>
                                                            </div>
                                                            <div class="col-md-7 mb-2">
                                                                <b>: {{ $tanggapan->tanggal_tanggapan }}</b>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>Isi Pengaduan </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <textarea name="isi_tanggapan" class="form-control mb-2" cols="30" rows="5"
                                                                    readonly>{{ $tanggapan->tanggapan }}</textarea>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <a href="#" class="btn btn-success me-1 mb-1">
                                                                    Print</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
