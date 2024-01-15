<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'product_id' => 'required',
        ]);
    
        Comment::create($request->all());
    
        $product = Product::find($request->input('product_id'));
    
        $comments = $product->comments;
    
        return view('review', compact('product'));
    }
}
