@extends('layouts.master')
@section('title', 'Kris-Mart | Home')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
  <div class="container-fluid p-0 mt-4">
  <div class="container align-items-center">
    <div class="row">
    <!-- Image column -->
    <div class="col-md-6 text-center">
      <img src="{{ asset('images/discount-img.png') }}"
           alt="Discount" 
           class="img-fluid" 
           style="height: 450px; width: auto;">
    </div>

    <!-- Text column -->
    <div class=" col-md-6 text-center my-auto">
      <h1 class="text-success" style="font-size: 6rem; font-weight: bold;">50% OFF</h1>
      <a href="#" class="btn btn-success text-center mb-5 mt-5 fs-3">Shop Now</a>
      
    </div>

  </div>
  </div>
</div>


@endsection
@section('script')
    <script src="{{ asset('js/style.js') }}"></script>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection