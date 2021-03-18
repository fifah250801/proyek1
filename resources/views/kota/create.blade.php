@extends('app')
@section('content')
<h4>Kota Baru</h4>
<form action="{{ route('kota.store') }}" method="post">
 {{csrf_field()}}
 <div class="form-group {{ $errors->has('kota') ?'has-error' : '' }}">
 <div class="form-group">
    <label for="propinsi_id">Propisnsi</label>
    <select class="form-control" name="propinsi_id">
    <option  value="">--pilihan--</option>
      @foreach($prop as $p)
         <option  value="{{ $p->id }}">{{$p->nama_propinsi }}</option>
      @endforeach
    </select>
  </div>

 <label for="nama_kota" class="control-label">Nama Kota</label>
 <input type="text" class="form-control" name="nama_kota">
 @if ($errors->has('kota'))
        <span class="help-block"> {{ $errors->first('kota') }}</span>
 @endif

 </div>
 <div class="form-group">
 <button type="submit" class="btn btn-info">Simpan</button>
 <a href="{{ route('kota.index') }}"
 class="btn btn-default">Kembali</a>
 </div>
</form>
@endsection