@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Input Data Tamu Undangan TEMATIK 2023</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Nama Lengkap Anda!"></br>
        <label>NIM</label></br>
        <input type="text" name="nim" id="nim" class="form-control" placeholder="Input NIM Anda! (Contoh: 2222222222)"></br>
        <label>Kelas</label></br>
        <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Input Kelas Anda! (Contoh: 1D)"></br>
        <label>Angkatan</label></br>
        <input type="text" name="angkatan" id="angkatan" class="form-control" placeholder="Input Tahun Angkatan Anda! (Contoh: 2023)"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop