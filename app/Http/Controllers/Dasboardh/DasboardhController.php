<?php

namespace App\Http\Controllers\Dasboardh;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasboardhController extends Controller
{
    public function dashboard() {
            return view('admin.layout-admin.dasbhoard');
    }
}