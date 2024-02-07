@extends('layout')
@section('title', 'Product Index')
@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('product.create') }}" class="btn btn-primary">Create Product</a>
    </div>

    <div class="mt-3">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <h1 class="mt-5 mb-4">Products</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->inventory_quantity }}</td>
                    <td>{{ $product->status }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('product.destroy', ['product' => $product]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No products found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
