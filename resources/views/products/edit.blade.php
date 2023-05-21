<!-- resources/views/products/create.blade.php -->

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<!-- resources/views/products/edit.blade.php -->

<h1>Edit Product</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="Name" class="form-control" value="{{ $product->Name }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="Description" class="form-control" required>{{ $product->Description }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="Price" class="form-control" value="{{ $product->Price }}" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category:</label>
        <select name="CategoryID" class="form-control" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->CategoryID }}" {{ $category->CategoryID == $product->CategoryID ? 'selected' : '' }}>{{ $category->Name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="Image" class="form-control-file">
    </div>
    @if ($product->Image)
        <div class="form-group">
            <label>Current Image:</label>
            <img src="{{ asset('images/' . $product->Image) }}" alt="{{ $product->Name }}" width="100">
        </div>
    @endif
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>
