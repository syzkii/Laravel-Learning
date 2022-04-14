@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h4>{{ $name }}</h4>
    <h5>{{ $email }}</h5>
    <img src="img/{{ $image }}" alt="kiki" width="200">
@endsection
