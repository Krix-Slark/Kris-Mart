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
          <img src="{{ asset('images/discount-img.png') }}" alt="Discount" class="img-fluid"
            style="height: 450px; width: auto;">
        </div>

        <!-- Text column -->
        <div class="col-md-6 text-center my-auto">
          <h1 class="text-success" style="font-size: 6rem; font-weight: bold;">50% OFF</h1>
          <a href="#" class="btn btn-success text-center mb-5 mt-5 fs-3">Shop Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <h2 class="text-start">BEST SELLERS</h2>
    <a href="{{ route('products.create') }}" class="btn btn-outline-success mb-4">
      Add Product
    </a>
    <div class="row">
      @foreach($products as $product)
        <div class="col-12 col-md-3">
          <div class="card mt-3">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid"
              style="overflow: hidden; object-fit: cover;">

          </div>
          <div class="card-body text-start">
            <h5 class="card-title mt-3">{{ $product->name }}</h5>
            <p class="card-text mt-3" style="font-size: 14px; text-align: justify;">
              {{ Str::limit($product->description, 150) }}
            </p>
            <span class="text-success fw-bold">
              {{ number_format($product->price) }} Ks
            </span>
          </div>
          <div class="mt-2 d-flex justify-content-end gap-3">
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
              onsubmit="return confirm('Are you sure?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </div>

        </div>
      @endforeach
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ asset('js/style.js') }}"></script>
@endsection

@section('footer')
  @include('layouts.footer')
@endsection