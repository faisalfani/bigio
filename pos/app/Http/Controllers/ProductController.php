<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel as Product;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('dashboard',compact($product));
    }
    
}
