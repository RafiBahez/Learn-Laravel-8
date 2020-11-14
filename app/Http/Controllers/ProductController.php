<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = ['smart phone', 'laptop', 'pc'];

    public function index(){
        return view('product.index')->with('products', $this->products);
    }

    public function show($id){
        return view('product.show', ['products'=> $this->products, 'id' => $id]);
    }
}
