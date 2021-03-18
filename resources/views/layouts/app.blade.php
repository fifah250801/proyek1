<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,
 initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap
.min.css" rel="stylesheet">
 <title>Propinisi - CRUD</title>
 <style>
 .martop-sm {margin-top: 15px;}
 .martop-lg {margin-top: 70px;}
 </style>
</head>
<body>
 <div class="container martop-lg">
 <div class="panel panel-default">
 <div class="panel-body">@yield('content')</div>
 </div>
 </div>

<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</script>
</body>
</html>
Buatlah View mahasiswa/index.blade.php seperti pada skrip berikut:
@extends('layouts.app')
@section('content')
<h4>Menajemen Tabel Mahasiswa</h4>
<a href="{{ route('mahasiswa.create') }}"
 class="btn btn-info btn-sm">Mahasiswa Baru</a>
 <table class="table table-responsive martop-sm">
 <thead>
 <th>NIM</th>
 <th>NAMA</th>
 <th>ALAMAT</th>
 <th>TGL LHR</th>
 <th>AGAMA</th>
 <th>JENIS KL</th>
 <th>JURUSAN</th>
 <th>ACTION</th>
 </thead>
 <tbody>
 @foreach ($mhs as $m)
 <tr>
 <td>{{ $m->nim }}</td>
 <td>{{ $m->nama }}</td>
 <td>{{ $m->alamat }}</td>
 <td>{{ $m->tanggal_lahir }}</td>
 <td>{{ $m->ag($m->agama) }}</td>
 <td>{{ $m->jenis_kelamin=="L" ?
 "Laki-laki" : "Perempuan" }}</td>
 <td>{{ $m->getJurusan->jurusan}}</td>
 <td>
 <form action="{{ route('mahasiswa.destroy', $m->nim) }}"
 method="post">
 {{csrf_field()}}
 {{ method_field('DELETE') }}
 <a href="{{ route('mahasiswa.edit', $m->nim) }}"
 class="btn btn-warning btn-sm">Ubah</a>
 <button type="submit"
 class="btn btn-danger btn-sm">Hapus</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
@endsection