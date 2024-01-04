@extends('admin.adminLayout')

@section('content')
    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <label for="rating">rating from 0 to 10:</label>
            <input type="number" name="rating" id="rating" value="{{ old('rating', $product->rating) }}" step="0.01" required>
        </div>
        <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>    </form>
@endsection