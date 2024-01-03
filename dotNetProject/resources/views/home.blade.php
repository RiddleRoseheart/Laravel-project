@extends('layout')
@section('title', 'Home Page')
@section('content')
@if (session('status'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
@endif
<h1>haha<h1>
@endsection