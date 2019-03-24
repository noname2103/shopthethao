<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thanhvien;
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
//up csdl thanh vien moi
  public function postdangky(Request $request)
  {
    $thanhvien = new thanhvien();
    $thanhvien->TenKH = $request->HoTen;
    $thanhvien->Email = $request->Email;
    $thanhvien->SDT = $request->SDT;
    $thanhvien->MatKhau = $request->MatKhau;
    $thanhvien->save();

    return redirect()->route('getdangnhap');
  }
  //Kiểm tra đăng nhập
  public function postdangnhap(Request $request)
  {
    $email = $request->Email;
    $matkhau = $request->MatKhau;
    $tv = thanhvien::where([
      ['Email',$email],
      ['MatKhau',$matkhau]
    ]);
    if(isset($tv))
    {
      return redirect()->route('trangchu');
    }
    else {
      return view('user_interface.login',['thongbao','dang nhap sai']);
    }
  }
  // Hien giao dien trang dang nhap
  public function getdangnhap()
  {
    return view('user_interface.login');
  }
}
