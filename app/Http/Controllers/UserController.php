<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thanhvien;
use App\loaisanpham;
use App\monthethao;
use App\sanpham;
use App\giohang;
class UserController extends Controller
{
  // Hien trang chu
  public function trangchu()
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    $sanphamgiay = sanpham::where('Maloai','5')->get();
    $sanphamgg   = sanpham::orderBy('Gia', 'asc')->Limit('7')->get();
    $sanphammoi  = sanpham::orderBy('MaSP', 'desc')->Limit('7')->get();
    $sanphamhot  = sanpham::orderBy('Gia', '')->Limit('5')->get();
    return view('user_interface.index',['sanphamhot'=>$sanphamhot,'sanphammoi'=>$sanphammoi,'sanphamgg'=>$sanphamgg,'sanphamgiay'=>$sanphamgiay,'loai'=>$loai,'mon'=>$mon]);
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
    ])->first();
    if(isset($tv))
    {
      session()->put('iduser',$tv->MaTV);
      session()->put('username',$tv->TenKH);
      session()->put('email',$tv->Email);
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
  //Tim kiem
  public function getSearch(Request $req)
  {
    $product= sanpham::where('TenSP','like','%'.$req->key.'%')
                     ->orwhere('gia',$req->key)
                     ->get();
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    return view('user_interface.search',['product'=>$product,'loai'=>$loai,'mon'=>$mon]);
  }
  //chitietsanpham
  public function chitietsanpham($masp)
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    $sanphammuonxem=sanpham::where('MaMon','1')->Limit('4')->get();
    // $sanpham = sanpham::where('MaSP',$masp)->get();
    $sanpham = sanpham::where('MaSP',$masp)->get();
    return view('user_interface.single_product',['sanpham'=>$sanpham,'loai'=>$loai,'mon'=>$mon,'sanphammuonxem'=>$sanphammuonxem]);
  }

  // xem gio hang
  public function giohang()
  {
    $loai = loaisanpham::all();
    $mon = monthethao::all();
    $giohang = giohang::where('MaTV',session('iduser'))->get();
    $sanpham = sanpham::all();
    return view('user_interface.cart',['loai'=>$loai,'mon'=>$mon,'giohang'=>$giohang,'sanpham'=>$sanpham]);
  }

  // Thêm sản phẩm vào giỏ hàng
  public function themgiohang($masp)
  {
    // if(empty(session('iduser')))
    // {
    //   return redirect()->route('getdangnhap');
    // }
    // else
    // {
    //   return $masp;
    // }
    $giohang = giohang::where([
      ['MaSP',$masp],
      ['MaTV',session('iduser')]
    ])->first();
     $sanpham = sanpham::where('MaSP',$masp)->first();
    if(isset($giohang))
    {
      giohang::where([
        ['MaSP',$masp],
        ['MaTV',session('iduser')]
      ])->update([
        'SoLuong'=>$giohang->SoLuong+1,
        'TongGia'=>$giohang->SoLuong*$sanpham->Gia
      ]);
    }
    else
    {
      $giohang = new giohang();
      $giohang->MaSP = $masp;
      $giohang->MaTV = session('iduser');
      $giohang->SoLuong = 1;
      $giohang->TongGia = $sanpham->Gia;
      $giohang->save();
    }
    return "thêm thành công";
  }

  public function xoagiohang($magh)
  {
    giohang::where('MaGH',$magh)->delete();
    return "thanhg công";
  }

  public function themsoluong( $magh, $soluong, $dongia)
  {
    giohang::where('MaGH',$magh)->update([
      'SoLuong'=>$soluong,
      'TongGia'=>$dongia*$soluong
    ]);
    $giohang = giohang::where('MaGH',$magh)->first();
    $tonggia = $giohang->TongGia;
    return $tonggia;
  }
}
