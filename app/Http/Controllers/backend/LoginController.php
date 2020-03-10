<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function GetLogin()
    {
        return view('backend.login.login');
    }
    public function PostLogin(LoginRequest $request)
    {
      $email=$request->email;
      $pass=$request->password;

      if(Auth::attempt(['email' =>  $email, 'password' => $pass]))
      {
        return redirect('admin/category');
      }
      else
      {
        //chuyển hướng về trang ban đầu
        return redirect()->back()->withInput()->with('thongbao','Tài khoản hoặc mật khẩu không chính xác!');
      }
    }

    public function Logout()
    {
      Auth::logout();
      return redirect('login');
    }
}
