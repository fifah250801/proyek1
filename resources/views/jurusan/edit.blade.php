@extends('layouts.app')
@section('content')
<h4>Mengubah Jurusan Baru</h4>
<form action="{{ route('jurusan.update',$mhs->nim) }}" method="post">
 {{csrf_field()}}
 {{ method_field('PUT') }}
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 Terdapat beberapa kasalahan pada saat mengisi yang harus diperbiki.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <div class="form-group">
 <label for="nim" class="control-label">Nomor Jurusan</label>
 <input type="text" class="form-control" name="id"
 value="{{ $mhs->nim }}">
 </div>

 <div class="form-group">
 <label for="nama" class="control-label">Jurusan</label>
 <input type="text" class="form-control" name="jurusan"
 value="{{ $mhs->nama }}">
 </div>
<div class="form-group">
 <button type="submit" class="btn btn-info">Simpan</button>
 <a href="{{ route('mahasiswa.index') }}"
 class="btn btn-default">Kembali</a>
 </div>
</form>
@endsection