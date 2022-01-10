<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class ProductController extends Controller
{
    public function index(){
        $cates = Category::where('active',1)->get();
        return view('website.shop.products',compact('cates'));
    }
}