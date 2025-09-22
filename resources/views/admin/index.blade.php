@extends('layouts.master')
@section('title', 'Admin Panel - Home')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Manage Products</h1>

        <a href="{{ route('admin.products.create') }}" class="btn btn-primary mb-4">Add Product</a>

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-4"> <!-- 4 cards per row -->
                    <div class="card h-100">
                        {{-- Product Image --}}
                        @if($product->image)
                            <a href="#"><img src="{{ asset('images/Shop_Items/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->name }}" style="height:200px; object-fit:cover;"></a>
                        @else
                            <img src="#" class="card-img-top" alt="No Image">
                        @endif

                        <div class="card-body d-flex flex-column">
                            {{-- Product Name --}}
                            <h5 class="card-title">{{ $product->name }}</h5>

                            {{-- Product Description (limit 100 chars) --}}
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit($product->description, 100, '...') }}
                            </p>

                            {{-- Product Price --}}
                            <p class="card-text"><strong>${{ $product->price }}</strong></p>

                            {{-- Actions --}}
                            <div class="mt-auto">
                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                    class="btn btn-warning btn-sm w-100 mb-2">Edit</a>

                                <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm w-100"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
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