@extends('layouts.app')
@section('content')
<h4>Menajemen Tabel Jurusan</h4>
<a href="{{ route('jurusan.create') }}"
 class="btn btn-info btn-sm">Jurusan Baru</a>
 <table class="table table-responsive martop-sm">
 <thead>
 <th>ID</th>
 <th>NAMA JURUSAN</th>
 <th>ACTION</th>
 </thead>
 <tbody>
 @foreach ($jur as $j)
 <tr>
 <td>{{ $j->id }}</td>
 <td>{{ $j->jurusan }}</td>
 <td>
 <form action="{{ route('jurusan.destroy', $m->nim) }}"
 method="post">
 {{csrf_field()}}
 {{ method_field('DELETE') }}
 <a href="{{ route('jurusan.edit', $m->nim) }}"
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
