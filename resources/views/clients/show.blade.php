<!-- resources/views/products/show.blade.php -->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h1>{{ $client->Name }}</h1>

<p><strong>Email:</strong> {{ $client->Email }}</p>
<p><strong>Address:</strong> {{ $client->Address }}</p>



<a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
