<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  // Hien trang chu
  public function trangchu()
  {
    return view('user_interface.index');
  }

  // Hien giao dien trang dang ky
  public function getdangky()
  {
    return view('user_interface.register');
  }

  // Hien giao dien trang dang nhap
  public function getdangnhap()
  {
    return view('user_interface.login');
  }
}
