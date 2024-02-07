@extends('layout')
@section('title', 'Edit Product')
@section('content')
<div class="container">
    <h1 class="mt-5 mb-4">Edit Product</h1>

    <div class="mt-5">
        @if ($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <form method="post" action="{{ route('product.update', $Product->id) }}" style="max-width: 400px; margin: 0 auto;">
        @csrf
        @method('put')

        <div style="margin-bottom: 10px;">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="{{$Product->name}}">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="100" max="1000000" step="100" class="form-control" value="{{$Product->price}}">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="inventory_quantity" min="1" max="100" step="1" class="form-control" value="{{$Product->inventory_quantity}}">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="status">Status:</label>
            <select id="status" name="status" class="form-control">
                <option value="active" {{$Product->status == 'active' ? 'selected' : ''}}>Active</option>
                <option value="inactive" {{$Product->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
            </select>
        </div>
        <div style="margin-bottom: 10px;">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
@endsection
