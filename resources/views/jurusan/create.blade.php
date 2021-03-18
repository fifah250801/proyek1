@extends('layouts.app')
@section('content')
<h4>Tambah Jurusan Baru</h4>
<form action="{{ route('jurusan.store') }}" method="post">
 {{csrf_field()}}
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 Terdapat beberapa kasalahan pada saat mengisi yang harus diperbiki.<br><br><ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul></div>
 @endif
 <div class="form-group">
 <label for="nim" class="control-label">Nomor jurusan</label>
 <input type="text" class="form-control" name="id"
 placeholder="nomor jurusan"></div>
 <div class="form-group">
 <label for="nama" class="control-label">Nama Jurusan</label>
 <input type="text" class="form-control" name="jurusan"
 placeholder="nama"></div>
 <div class="form-group">
 <label for="jurusan_id">Jurusan</label>
 <select class="form-control" name="jurusan_id">
 <option value="">--pilihan--</option>
 @foreach($jur as $j)
 <option value="{{ $j->id }}">{{$j->jurusan }}</option>
 @endforeach
 </select></div>
 <div class="form-group">
 <button type="submit" class="btn btn-info">Simpan</button>
 <a href="{{ route('mahasiswa.index') }}"
 class="btn btn-default">Kembali</a></div></form>
@endsection