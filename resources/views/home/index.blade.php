@extends('layouts.master')
@section('title', 'Home')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
   
@endsection
@section('script')
    <script src="{{ asset('js/style.js') }}"></script>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
