@extends('layouts.master')
@section('title', 'Kris Mart | Home')

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
<div class="container mt-5">
    <h1 class="mb-4 text-start">Best Sellers</h1>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4"> <!-- 4 cards per row -->
                <div class="card h-100 border-0 shadow-sm">
                    {{-- Product Image --}}
                    @if($product->image)
                        <a href="#"><img src="{{ asset('images/Shop_Items/' . $product->image) }}" 
                             class="card-img-top" 
                             alt="{{ $product->name }}" 
                             style=" object-fit:cover;"></a>
                    @else
                        <img src="https://via.placeholder.com/200x200?text=No+Image" 
                             class="card-img-top border-0" 
                             alt="No Image">
                    @endif

                    <div class="card-body d-flex flex-column">
                        {{-- Product Name --}}
                        <h5 class="card-title">{{ $product->name }}</h5>

                         {{-- Product Description (limit 100 chars) --}}
                        <p class="card-text">
                            {{ \Illuminate\Support\Str::limit($product->description, 100, '...') }}
                        </p>

                        {{-- Product Price --}}
                        <p class="card-text font-weight-bold">${{ $product->price }}</p>
                    </div>
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
