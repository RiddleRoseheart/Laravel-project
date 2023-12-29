<!-- This is the Login pagina made with bootstraps, we removed some of the code 
that wasnt needed and will be adjusting it however we see fit --> 


@extends('layout')
<!-- we will extends the layout so the reg and the login will be the same page without needing to change the css every single time --> 
@section('title', 'Login')
@section('content') 
<div class="container">
<!-- BOOTSTRAP -->
    <!-- here well put the action in the form and well specify the route!-->
    <!-- and like basically we will specify the name login.post-->
    <!-- we also specify the method, we make a POST request for the email and password -->  
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

    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3"style="width:500px">
        @csrf
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