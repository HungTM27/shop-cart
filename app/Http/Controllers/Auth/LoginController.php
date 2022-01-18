<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequestForm;
class LoginController extends Controller
{
    public function Login(){
            return view('admin.login.GoogleLogin');
    }
    public function PostLogin(LoginRequestForm $request){
        if (Auth::attempt(['email' => $request->email, 'password' =>  $request->password])) { 
            if (Auth::user()->role == 1) {
                return redirect()->route('dashboard.index');
            }
            elseif (Auth::user()->role == 2) {
                return redirect()->route('welcome');
            }
        }else {
            return redirect()->route('login.index')->with('login', 'Bạn không có quyền admin');
        }
    }   
    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}