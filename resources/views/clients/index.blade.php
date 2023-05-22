<!-- resources/views/products/index.blade.php -->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h1>Clients</h1>

<a href="{{ route('clients.create') }}" class="btn btn-primary">Create Client</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table mt-3">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->Name }}</td>
                <td>{{ $client->Email }}</td>
                <td>{{ $client->Address }}</td>
                
                <td>
                    <a href="{{ route('clients.show', $client) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this client?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>