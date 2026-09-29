@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>Nama : {{ $jeneng }}</p>
    <p>NIM : {{ $nim }}</p>
    <p>Prodi : {{ $prodi }} <p>
    <img src="images/{{ $gambar }}" width="200px"></img>
@endsection