@extends('layouts.admin')

@section('admin-content')
<h2>Create Product</h2>
<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category_id" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>

    <button type="submit" class="btn btn-success">Add Product</button>
</form>
@endsection
