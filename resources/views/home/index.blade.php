@extends('layouts.master')
@section('title', 'Home')

@endsection

@section('layouts.navbar')
    @include('layouts.navbar')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <h1>Welcome to Kris-Mart</h1>
    <p>Your one-stop shop for all your needs.</p>
@endsection

@section('layouts.footer')
    @include('layouts.footer')
@endsection