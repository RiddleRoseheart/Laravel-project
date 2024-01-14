@extends('layout')
@section('title', 'Home Page')
@section('content')
@if (session('status'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
@endif
<!-- https://freefrontend.com/bootstrap-product-cards/ -->
<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
                                <h2 style="color: white; font-size:50px; text-decoration:underline; font-weight:bold;">Products</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
                        @foreach ($products->sortByDesc('created_at') as $product)						
                        <div class="col-md-6 col-lg-4 col-xl-3 ">
                        <a href="{{ route('admin.product.review', ['product' => $product->id]) }}">
								<div id="product-2" class="single-product " style=" border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0, 0, 0, 1); width:80%; ">
										<div class="part-1 " style="padding:10px; margin-left:20px">

                                        @if(now()->diffInDays($product->created_at) < 1)
													<span class="discount" style="position: absolute; top: 15px; left: 20px; color: #FFF; background-color: #fe302f; padding: 2px 8px; text-transform: uppercase; font-size: 0.85rem;">New</span>
												@endif   
                                                                                            <!-- new enkel 3 dagen blijven -->
                                                 <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="border: 10px ridge #7BD3EA; border-radius: 10px;">
												<ul>
														<!-- <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li> -->
														<li><a href="#"><i class="fas fa-heart">{{ $product->rating }}</i></a></li>
														<!-- <li><a href="#"><i class="fas fa-plus"></i></a></li>-->
                                                        </ul> 
										</div>
										<div class="part-2" style="padding:15px; padding-top:0px;">
												<h3 class="product-title" style="font-size: 1.1rem;   color: white; ">{{$product->name}}</h3>
										</div>
								</div>
                            </a>
						</div>
                        @endforeach
				</div>
		</div>
</section>

<style type="text/css">

    /* https://freefrontend.com/bootstrap-product-cards/ */





    @import url('https://fonts.googleapis.com/css2?family=Comforter&family=Dawning+of+a+New+Day&family=Fredericka+the+Great&family=Henny+Penny&family=Homemade+Apple&family=Island+Moments&family=Rubik+Doodle+Shadow&family=Salsa&family=Sofia&display=swap');

body {
    font-family: 'Henny Penny', system-ui !important;
    color: black;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
   
}

.section-products {
    padding: 80px 0 54px;
}

.section-products .header {
    margin-bottom: 50px;
}

.section-products .header h3 {
    font-size: 1rem;
    color: #fe302f;
    font-weight: 500;
}

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section-products .single-product {
    margin-bottom: 26px;
    backdrop-filter: blur(10px); 
    background-color: rgba(255, 255, 255, 0.0); 
}

.section-products .single-product .part-1::before {
		position: absolute;
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
		transform: scale(1.2,1.2) rotate(5deg);
}

.section-products .single-product .part-1 .discount,
.section-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section-products .single-product .part-1 ul {
    position: absolute;
    bottom: 0;
    left: 32%; 
    transform: translateX(-50%);
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
    display: flex;
    justify-content: center; 
    align-items: center;
}

.section-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section-products .single-product .part-1 ul li a:hover {
    color: #fe302f;
}

.section-products .single-product .part-2 .product-title {
    font-size: 1rem;
}




.section-products .single-product .part-1 {
    position: relative;
    height: 290px; 
    margin-bottom: 20px;
    overflow: hidden;
}


.section-products .single-product .part-1 img {
    height: 100%;
    object-fit: contain;
}

    </style>
@endsection