@extends('students.layout')
@section('content')

<div class="card">
    <style>
        .card {
            margin: 100px auto;
            width: 750px ;
        }
    </style>
    <div class="card-header"><h2>Informasi Data Tamu Undangan TEMATIK 2023</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama  : {{ $students->nama }}</h5>
            <h5 class="card-title">NIM   : {{ $students->nim }}</h5>
            <h5 class="card-title">Kelas: {{ $students->kelas }}</h5>
            <h5 class="card-title">Angkatan : {{ $students->angkatan }}</h5>

        </div>
    </div>