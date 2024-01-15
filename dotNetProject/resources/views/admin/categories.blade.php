@extends('admin.adminLayout')

@section('content')
    <div class="container mt-3 form-container">
        <h1 class="text-center">Categories</h1>

        @foreach ($categories as $category)
            <div class="card rounded p-3 mb-3">
                <h2>{{ $category->name }}</h2>
                <p>{{ $category->created_at }}</p>
                <a href="{{ route('admin.editCategory', ['id' => $category->id]) }}" class="btn btn-warning rounded">Edit</a>
            </div>
        @endforeach

        <a href="{{ route('admin.createCategory') }}" class="btn btn-primary rounded">Create Category</a>
    </div>
@endsection
