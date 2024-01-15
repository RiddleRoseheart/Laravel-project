@extends('admin.adminLayout')

@section('content')

    <div class="container-fluid mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-md-6 p-4 rounded blur-bg">
                <h1>Create Category</h1>

                <form action="{{ route('admin.storeCategory') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Category</button>
                </form>
            </div>
        </div>
    </div>

    <style>
     .blur-bg {
        background-color: rgba(255, 255, 255, 0.5); 
        backdrop-filter: blur(8px); 
    }
    </style>

@endsection
