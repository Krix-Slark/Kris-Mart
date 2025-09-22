@extends('layouts.master')
@section('title', 'Edit Product')

@section('navbar')
  @include('layouts.navbar')
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
 <div class="container mt-5">
    <h1>Edit Product</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label>Current Image</label><br>
            @if($product->image)
                    <img src="{{ asset('images/Shop_Items/' . $product->image) }}" width="100" alt="{{ $product->name }}">
            @else
                No image
            @endif
        </div>

        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
@section('script')
  <script src="{{ asset('js/style.js') }}"></script>
@endsection