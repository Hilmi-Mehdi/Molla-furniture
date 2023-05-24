<!-- resources/views/products/show.blade.php -->
@extends('admin.layout')


@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<h1>Categories</h1><br><br>
<div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Category name</h5>
      <p class="card-text">This category represents : <b>{{ $category->Name }}</b></p>
      <a href="{{ route('category.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>




@endsection