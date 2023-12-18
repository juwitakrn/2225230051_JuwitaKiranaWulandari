@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Data Tamu Undangan TEMATIK 2023</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>NIM</label>
        <input type="text" name="nim" id="nim" value="{{$students->nim}}" class="form-control"></br>
        <label>Kelas</label>
        <input type="text" name="kelas" id="kelas" value="{{$students->kelas}}" class="form-control"></br>
        <label>Angkatan</label>
        <input type="text" name="angkatan" id="angkatan" value="{{$students->angkatan}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop