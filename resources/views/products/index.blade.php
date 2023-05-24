<!-- resources/views/products/index.blade.php -->

@extends('admin.layout')

@section('profile')
    Aziz
@endsection

@section('content')

    
<h1>Products</h1>

<a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table mt-3">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->Name }}</td>
                <td>{{ $product->Description }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->Category->Name }}</td>
                <td>
                    @if($product->Images)
                        <ul>
                            @foreach( json_decode($product->Images) as $image)
                                <li>
                                    <img src="{{ asset('storage/images/' . $image) }}" alt="{{ $product->Name }}" width="100">
                                </li>
                            @endforeach
                        </ul>
                    @else
                        No images
                    @endif
                </td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}
    
@endsection

{{-- <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head> --}}
