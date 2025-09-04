@extends('layouts.master')
@section('title', 'Home')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
   <div class="container-fluid p-0 mt-4">
    <div style="width:100%; height:500px; background-color: #807c7cef;"></div>
</div>

@endsection
@section('script')
    <script src="{{ asset('js/style.js') }}"></script>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
