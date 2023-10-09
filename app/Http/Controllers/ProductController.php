<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $topProducts = $products->take(2);
        $trendingProduct = $products->take(8);
      
        return view('index',[
            'topProduct' => $topProducts,
            'trendingProducts' => $trendingProduct,
        ]);
    }
}
