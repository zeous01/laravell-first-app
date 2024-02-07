@extends('layout')
@section('title', "Create")
@section('content')
    <h1>Create a Product</h1>
    <form method="post" action="" style="max-width: 400px; margin: 0 auto;">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" style="margin-left: 5px; width: 100%;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="100" max="10000" step="100" value="100" style="margin-left: 5px; width: 100%;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="0" max="100" step="1" value="1" style="margin-left: 5px; width: 100%;">
        </div>
        <div style="margin-bottom: 10px;">
            <label for="status">Status:</label>
            <select id="status" name="status" style="margin-left: 5px; width: 100%;">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div style="margin-bottom: 10px; overflow: hidden;">
            <button type="submit" style="width: 48%; float: left;">Create</button>
            <input type="reset" value="Reset" style="width: 48%; float: right;">
        </div>
    </form>
@endsection
