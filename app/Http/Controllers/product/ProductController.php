<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){ 
        $prods = Product::orderBy('id', 'desc')->paginate(5);
        return view('admin.products.index',compact('prods'));
    }
}