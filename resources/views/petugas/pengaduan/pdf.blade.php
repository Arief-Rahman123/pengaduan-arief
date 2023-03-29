<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Pengaduan</title>
</head>
<body>
    <img style="width: 80px" src="https://i.pinimg.com/originals/af/b8/0c/afb80ca0df6e4bfbb3826a3735138e44.jpg" alt="">
    <div class="text-center">
        <h5>Laporan Pengaduan Masyarakat Desa Bitung Sari</h5>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>Tanggal</th>
                    {{-- <th>Tanggal Tanggapan</th> --}}
                    <th>Isi Laporan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $k => $v)
                    <tr>
                        <td>{{ $k += 1 }}</td>
                        <td>{{ $v->nik}}</td>
                        <td>{{ $v->masyarakat->nama}}</td>
                        <td>{{ $v->tanggal_pengaduan}}</td>
                        {{-- <td>{{ $v->tanggal_tanggapan}}</td> --}}
                        <td>{{ $v->isi_pengaduan}}</td>
                        <td>{{ $v->status }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>