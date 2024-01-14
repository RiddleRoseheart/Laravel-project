@extends('admin.adminLayout')
@section('content')

<div class="form-container">
    <h1>Edit Category</h1>

    <form action="{{ route('admin.updateCategory', ['id' => $category->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Category Name</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}" required>

        <button type="submit">Update Category</button>
    </form>
</div>

<style>
   
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

   
    form {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(8px); 
        width: 300px; 
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
    }

   
    label {
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

   
    button {
        background-color: #3490dc; 
        color: #ffffff; 
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

@endsection
