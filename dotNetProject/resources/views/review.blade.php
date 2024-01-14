@extends('layout')
@section('title', 'Product Details')
@section('content')


<div class="container">
    <div class="info" style="background: linear-gradient(45deg, #000, #A555EC); margin-left: 20px; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
        <h1 style="color: #FFF; font-family: 'Henny Penny', system-ui !important; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{ $product->name }}</h1>
        <div class="image" style="position: relative;">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image" style="border: 10px ridge #7BD3EA; border-radius: 10px;">
            
        </div>
        <h2 style="color: #A555EC; font-family: 'Henny Penny', system-ui !important; padding-top: 10px;">Extra Info</h2>
        <p style="color: #A555EC;">Rating: {{ $product->rating }}</p>
        <p style="color: #A555EC;">Created at: {{ $product->created_at }}</p>
    </div>

    <div class="review" style="background: linear-gradient(-45deg, #FFF8C9, #F6D6D6); padding: 20px; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
        <h1 style="color: #A555EC; font-family: 'Henny Penny', system-ui !important; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">My Review!</h1>
        <p style="color: #A555EC; padding: 20px;">{{ $product->description }}</p>
    </div>
</div>
<div class="bubbles" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none;">
<div class="bubbles">
    @for ($i = 0; $i < 40; $i++)
        <div class="bubble" style="width: {{ rand(10, 30) }}px; height: {{ rand(10, 30) }}px; top: {{ rand(0, 100) }}%; left: {{ rand(0, 100) }}%; animation-duration: {{ rand(5, 15) }}s;"></div>
    @endfor
</div>
</div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Comforter&family=Dawning+of+a+New+Day&family=Fredericka+the+Great&family=Henny+Penny&family=Homemade+Apple&family=Island+Moments&family=Rubik+Doodle+Shadow&family=Salsa&family=Sofia&display=swap');

    .container {
        display: flex;
       
        text-align: center;
        margin-top: 50px;
   
    }

    .info {
        flex: 1 100%;
        text-align: center;
        margin-right:10px;
        max-width: 40%;
    }

    .image {
        flex: 1 23%;
        margin-right: 20px;
       
    }

    .image img {
        max-width:40%;
        max-height: 40%;
        border: 10px ridge #7BD3EA;
    }

    .review {
        padding-top: 20px;
      
        flex: 1 75%;
        text-align: left;
    }

    h1, h2 {
        margin-top: 10px;
        margin-bottom: 5px;
        font-family: 'Henny Penny', system-ui !important;

    }

    p {
        margin: 10px 0;
    }

    .bubbles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.bubble {
    position: absolute;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.6);
    animation: bubble-float linear infinite;
}

@keyframes bubble-float {
    0% {
        transform: translateY(0) scale(1);
    }
    50% {
        transform: translateY(-100px) scale(0.8);
    }
    100% {
        transform: translateY(0) scale(1);
    }
}
</style>
@endsection
