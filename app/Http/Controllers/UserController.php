<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thanhvien;
use App\loaisanpham;
use App\monthethao;
use App\sanpham;
class UserController extends Controller
{
  // Hien trang chu
  public function trangchu()
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    return view('user_interface.index',['loai'=>$loai,'mon'=>$mon]);
  }

  // Hien giao dien trang dang ky
  public function getdangky()
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    return view('user_interface.register',['loai'=>$loai,'mon'=>$mon]);
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
    ])->get();
    if(isset($tv))
    {
      return redirect()->route('trangchu');
    }
    else {
      return view('user_interface.login',['thongbao','Mật khẩu hoặc email không đúng']);
    }
  }

  // Hien giao dien trang dang nhap
  public function getdangnhap()
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    return view('user_interface.login',['loai'=>$loai,'mon'=>$mon]);
  }
  //Hien thi danh sach san xemsanpham
  public function danhsachsptheoloai($maloai)
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    $sanpham = sanpham::where('MaLoai',$maloai)->get();
    return view('user_interface.list_topic',['sanpham'=>$sanpham,'loai'=>$loai,'mon'=>$mon]);
  }
  //danhsachsptheomon
  public function danhsachsptheomon($mamon)
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    $sanpham = sanpham::where('MaMon',$mamon)->get();
    return view('user_interface.list_topic',['sanpham'=>$sanpham,'loai'=>$loai,'mon'=>$mon]);
  }
}
