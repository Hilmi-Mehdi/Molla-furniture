<!-- resources/views/products/show.blade.php -->
@extends('admin.layout')

@section('profile')
    Aziz
@endsection

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<h2>Products</h2>
<div class="card w-50">
    <div class="card-body">
        <p><strong>Name : </strong> {{ $product->Name }}</p>
        <p><strong>Description:</strong> {{ $product->Description }}</p>
        <p><strong>Price:</strong> {{ $product->Price }}</p>
        <p><strong>Category:</strong> {{ $product->category->Name }}</p>
        @if ($product->Images)
            <p><strong>Image:</strong></p>
            @foreach( json_decode($product->Images) as $image)
                                <li>
                                    <img src="{{ asset('storage/images/' . $image) }}" alt="{{ $product->Name }}" width="100">
                                </li>
                            @endforeach
        @endif
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>


@endsection
