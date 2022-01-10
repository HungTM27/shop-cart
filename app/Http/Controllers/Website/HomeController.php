<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class HomeController extends Controller
{
    public  function index(){
        $cates = Category::where('active',1)->orderBy('name','desc')->get();
        return view('website.home',compact('cates'));
    }
}