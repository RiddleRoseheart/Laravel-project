@extends('admin.adminLayout')

@section('content')
    <h1>Products</h1>

    <p>
        <a href="{{ route('products.create') }}">Create Product</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>rating</th>
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
                        <a href="{{ route('products.edit', $product) }}">Edit</a>

                        <form method="POST" action="{{ route('products.destroy', $product) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection