<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainidx() {
        return view('admin.main', ['title' => 'Trang Quản Trị']);
    }
}