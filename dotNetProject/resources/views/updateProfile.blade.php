@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
<!-- https://getbootstrap.com/docs/4.3/components/forms/#custom-forms -->
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" style="width:500px; padding:20px; backdrop-filter: blur(10px); 
    background-color: rgba(255, 255, 255, 0.1); color:white; font-size:30px;">
 @csrf
 @method('PUT')

 <!-- Name Field -->
 <div class="form-group">
   <label for="name">Name</label>
   <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
 </div>

 <!-- Email Field -->
 <div class="form-group">
   <label for="email">Email address</label>
   <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
 </div>

 <!-- Birthday Field -->
 <div class="form-group">
   <label for="birthday">Birthday</label>
   <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $user->birthday) }}">
 </div>

 <!-- Avatar Field -->
 <div class="form-group">
   <label for="avatar">Avatar</label>
   <input type="file" class="form-control-file" id="avatar" name="avatar">
 </div>

 <!-- About Me Field -->
 <div class="form-group">
   <label for="aboutMe">About Me</label>
   <textarea class="form-control" id="aboutMe" name="about_me" rows="3">{{ old('about_me', $user->about_me) }}</textarea>
 </div>

 <button type="submit" class="btn btn-primary" style=" font-family: Arial !important;">Update Profile</button>
</form>
<div>
@endsection 