@extends('_partial.content');
@section('title_content', 'Data Pengaduan')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header text-center font-bold">Data Pengaduan Masyarakat Desa Bitng Sari</div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Nama Pelapor</th>
                        <th>Judul Laporan</th>
                        <th>Berkas</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pending as $item)
                        <tr>
                            <td>{{ $item->masyarakat->nama }}</td>
                            <td>{{ $item->judul_pengaduan }}</td>
                            <td><img src="{{ asset('berkas/pengaduan/' . $item->file) }}"
                                    style="width: 100px;height: 100px;"></td>
                            <td>
                                @if ($item->status === '0')
                                    <div class="badge bg-danger">Pending</div>
                                @elseif($item->status == 'proses')
                                    <div class="badge bg-warning text-white">Proses</div>
                                @else
                                    <div class="badge bg-success">Selesai</div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.detail', $item->id_pengaduan) }}"
                                    class="btn btn-sm btn-primary col-12">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
