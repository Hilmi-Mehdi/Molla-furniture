<!-- resources/views/products/show.blade.php -->
@extends('admin.layout')


@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h2>Ordered Products</h2>
<div class="card w-50">
    <div class="card-body">
        <p><strong>OrderID : </strong> {{ $order->OrderID }}</p>
        <p><strong>ClientID : </strong> {{ $order->ClientID }}</p>
        <p><strong>OrderDate:</strong> {{ $order->OrderDate }}</p>
        <p><strong>TotalAmount:</strong> {{ $order->TotalAmount }}</p>

        
        @foreach ($products as $product)
        <div>
            <h5>{{ $product->Name }}</h5>

            <p><strong>Description:</strong> {{ $product->Description }}</p>
            <p><strong>Price:</strong> {{ $product->Price }}</p>
            <p><strong>Category:</strong> {{ $product->category->Name }}</p>

            @if ($product->Images)
                    <p><strong>Image:</strong></p>
                        <ul>
                            @foreach( json_decode($product->Images) as $image)
                                <li>
                                    <img src="{{ asset('storage/images/' . $image) }}" alt="{{ $product->Name }}" width="100">
                                </li>
                            @endforeach
                        </ul>
            @endif
        </div>
        @endforeach
        
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>






@endsection