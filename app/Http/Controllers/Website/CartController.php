<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CartController extends Controller
{
    public function index(){
        $cates = Category::where('active',1)->get();
        return view('website.cart.index',compact('cates'));
    }
}