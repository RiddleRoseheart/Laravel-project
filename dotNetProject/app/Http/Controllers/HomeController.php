<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Product;
use Illuminate\Http\Request;


//here we have a function for the home blade where we will fetch ALL the data of the products now posts and display them to the users!
class HomeController extends Controller
{
   public function index(): View
   {
       $products = Product::all();
       return view('home', ['products' => $products]);
   }
}