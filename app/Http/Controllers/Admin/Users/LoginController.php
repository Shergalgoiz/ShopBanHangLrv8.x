<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('admin.users.login', ['title' => 'Đăng Nhập Hệ Thống']);
    }

    public function store(Request $request) {
        $this->validate($request, ['email' => 'required|email:filter','password' => 'required']);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'))) {
            return redirect()->route('admin');
        }
        // Session::flash('error', 'email hoặc mật khẩu không chính xác');
        session()->flash('error', 'email hoặc mật khẩu không chính xác');

        return redirect()->back();

        // $credentials = $request->validate([
        //     'email' => ['required', 'email:filter'],
        //     'password' => ['required'], 
        //     "remember" => []
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('admin');
        // }
        // return redirect()->back();

    }
}
