@extends('layouts.admin')

@section('admin-content')
<h2>Products</h2>
<a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add Product</a>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Populate products -->
    </tbody>
</table>
@endsection
