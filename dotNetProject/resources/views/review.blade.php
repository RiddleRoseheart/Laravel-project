@extends('layout')
@section('title', 'Product Details')
@section('content')


<div class="container">
    <div class="info">
        <h1>{{ $product->name }}</h1>
        <div class="image">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
    </div>
    <p>Rating: {{ $product->rating }}</p>
        <p>Created at: {{ $product->created_at }}</p>
    </div>

  

    <div class="review">
        <p>{{ $product->description }}</p>
    </div>
</div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Comforter&family=Dawning+of+a+New+Day&family=Fredericka+the+Great&family=Henny+Penny&family=Homemade+Apple&family=Island+Moments&family=Rubik+Doodle+Shadow&family=Salsa&family=Sofia&display=swap');

    .container {
        display: flex;
       
        text-align: center;
        margin-top: 50px;
        background-color: orange;
    }

    .info {
        flex: 1 100%;
        text-align: center;
    }

    .image {
        flex: 1 25%;
        margin-right: 20px;
    }

    .image img {
        max-width: 40%;
        max-height: 40%;
    }

    .review {
        padding-top: 100px;
        background-color: #fff;
        flex: 1 75%;
        text-align: left;
    }

    h1 {
        margin-bottom: 10px;
        font-family: 'Henny Penny', system-ui !important;

    }

    p {
        margin: 10px 0;
    }
</style>
@endsection
