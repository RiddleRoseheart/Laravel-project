@extends('admin.adminLayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Create Product</h1>

                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" style=" background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(8px); padding:15px">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <!-- Display error if user gives a rating higher than 10 -->
                        @if ($errors->has('rating'))
                            <div class="alert alert-danger">{{ $errors->first('rating') }}</div>
                        @endif
                        <label for="rating" class="form-label">Rating from 0 to 10:</label>
                        <input type="number" name="rating" id="rating" value="{{ old('rating') }}" step="0.01" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Create Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
