@extends('admin.adminLayout')

@section('content')
    <h1>Create Product</h1>

    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
        </div>

        <div>
            <!-- ERROR if user give a rating higher than 10 !! -->
        @if ($errors->has('rating'))
        <span class="error">{{ $errors->first('rating') }}</span>
        @endif
            <label for="rating">rating from 0 to 10:</label>
            <input type="number" name="rating" id="rating" value="{{ old('rating') }}" step="0.01" required>
        </div>

        <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Create Product</button>    </form>
@endsection