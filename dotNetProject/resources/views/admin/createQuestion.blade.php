@extends('admin.adminLayout')
@section('content')

<div class="form-container">
    <h1>Create FAQ</h1>

    <form action="{{ route('admin.storeQuestion') }}" method="POST">
        @csrf

        <label for="category">Category</label>
        <select id="category" name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="question">Question</label>
        <input type="text" id="question" name="question" required>

        <label for="answer">Answer</label>
        <textarea id="answer" name="answer" required></textarea>

        <button type="submit">Create FAQ</button>
    </form>
</div>


<style>
    /* Style for the container */
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
        backdrop-filter: blur(10px); 
        width: 300px; 
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
    }

    label {
        margin-bottom: 8px;
    }

    input, textarea {
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