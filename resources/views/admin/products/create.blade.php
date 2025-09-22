@extends('layouts.master')
@section('title', 'Add Product')

@section('navbar')
  @include('layouts.navbar')
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
 <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" class="form-control" step="0.01" required>
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>

@endsection
@section('script')
  <script src="{{ asset('js/style.js') }}"></script>
@endsection