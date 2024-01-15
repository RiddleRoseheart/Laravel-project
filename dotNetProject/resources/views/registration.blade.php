@extends('layout')
@section('title', 'Registration')
@section('content')
<div class="container"> 
    <div class="mt-5"> <!-- for the errors in blade-->
    @if($errors ->any())
        <div class="col-12">
        @foreach($errors->all() as $error)
        <!-- an array with the errors -->
            <div class="alert alert-danger"><!-- Print the errors-->{{$error}}</div>
        @endforeach
        </div>
    @endif
    <!-- just above are all the errors that Laravel will past. Under are ours the one you can find in authentificationM-->

    @if(session()->has('error')) <!-- does the session have something with the key error? -->
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    </div>
    <!-- BOOTSTRAP -->
    <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width:500px; padding:20px; backdrop-filter: blur(10px); 
    background-color: rgba(255, 255, 255, 0.1); color:white; font-size:30px;">
        @csrf
        <div class="mb-3">
            <label class="form-label">Fullname</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection