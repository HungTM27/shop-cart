<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public  function index() {
        $user = User::all();
        return view('admin.login.index',compact('user'));
    }
    public function Register() {
        return view('admin.login.Register');
    }
    protected function SaveRegister(request $request) {
        $use = new User();
        $use->name = $request->name;
        $use->email = $request->email;
        $use->role = 2;
        $use->password = hash::make($request->password);
        $use->save();
        return redirect()->route('register.index')->with('success','Đăng Ký thành công ,');
    }
    public function EditRegister($id){
        $use = User::find($id);
        return view('admin.login.edit-user');
    }
}
