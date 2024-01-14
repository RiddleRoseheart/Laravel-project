@extends('admin.adminLayout')

@section('content')
    <div class="container mt-3 form-container">
        <h1 class="text-center">Products</h1>

        <p class="text-center">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
        </p>

        <table class="table rounded" style="background: rgba(255, 255, 255, 0.3); 
        backdrop-filter: blur(10px); ">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Rating</th>
                    <th>Images</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->rating }}</td>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-secondary">Edit</a>

                            <form method="POST" action="{{ route('products.destroy', $product) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
