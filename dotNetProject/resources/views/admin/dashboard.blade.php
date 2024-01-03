@extends('admin.adminLayout')
@section('content')
@if (session('status'))

   <div class="alert alert-success">
       {{ session('status') }}</div>
@endif
   <h1>Admin Panel</h1>








@endsection