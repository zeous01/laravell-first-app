@extends('layout')
@section('title', "Create")
@section('content')
<div class="container">
    <h1 class="mt-5 mb-4">Create a Product</h1>

    <div class="mt-5">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <form method="post" action="{{ route('product.store') }}" style="max-width: 400px; margin: 0 auto;">
        @csrf
        @method('post')

        <div style="margin-bottom: 10px;">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" class="form-control">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="100" max="1000000" step="100" value="100" class="form-control">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="inventory_quantity" min="1" max="100" step="1" value="1" class="form-control">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="status">Status:</label>
            <select id="status" name="status" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div style="margin-bottom: 10px;">
            <button type="submit" class="btn btn-primary" style="width: 48%;">Create</button>
            <button type="reset" class="btn btn-secondary" style="width: 48%;">Reset</button>
        </div>
    </form>
</div>
@endsection
