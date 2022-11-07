<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::paginate(20);
        return view('cart.cart_product',compact('product'))->with('i',(\request()->input('page',1) -1) *5);
    }

}
