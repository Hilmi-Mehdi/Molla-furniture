<!-- resources/views/products/create.blade.php -->
@extends('admin.layout')


@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h1>Create client</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="Name">Name:</label>
        <input type="text" name="Name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <textarea name="Email" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="Address">Address:</label>
        <textarea name="Address" class="form-control" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection