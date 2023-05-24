<!-- resources/views/products/index.blade.php -->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h1>Orders</h1>

<a href="{{ route('orders.create') }}" class="btn btn-primary">Create Order</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table mt-3">
    <thead>
        <tr>
            <th>OrderID</th>
            <th>ClientID</th>
            <th>OrderDate</th>
            <th>TotalAmount</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->OrderID }}</td>
                <td>{{ $order->ClientID }}</td>
                <td>{{ $order->OrderDate }}</td>
                <td>{{ $order->TotalAmount }}</td>
                
                <td>
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-info">Show</a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
