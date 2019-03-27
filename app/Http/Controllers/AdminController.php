<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\loaisanpham;
use App\monthethao;
class AdminController extends Controller
{
    public function dashboard()
    {
      return view('admin_panel.dashboard');
    }

    // Trang danh nhap admin
    public function getdangnhapadmin()
    {
      return view('admin_panel.login');
    }

    // Trang danh sach san pham
    public function danhsachsp()
    {
      $sanpham = sanpham::all();
      return view('admin_panel.topic.list_topic',['sanpham'=>$sanpham]);
    }

    // Trang them mot san pham moi
    public function getthemsp()
    {
      $mon = monthethao::all();
      $loai = loaisanpham::all();
      return view('admin_panel.topic.add_topic',['loai'=>$loai,'mon'=>$mon]);
    }

    // Xu ly them mot san pham
    public function postthemsp(Request $request)
    {
      $sp = new sanpham();
      $sp->TenSP = $request->tensp;
      $sp->NoiSX = $reuqest->noisx;
      $sp->Gia = $reuqest->gia;
      $sp->MaMon = $request->mamon;
      $sp->MaLoai = $request->maloai;
      $sp->save();

      return redirect()->route('danhsachsp');
    }

    // Trang hien thi chinh sua mot san pham
    public function getsuasp($masp)
    {
      $sanpham = sanpham::where('MaSP',$masp)->first();

      return view('admin_panel.topic.edit_topic',['sanpham'=>$sanpham]);
    }

    // xu ly sua mot san pham
    public function postsuasp(Request $request)
    {
      sanpham::where('MaSP',$reuqest->masp)->update([
        ['TenSP'=>$request->tensp],
        ['NoiSX'=>$request->noisx],
        ['Gia'=>$request->gia],
        ['MaMon'=>$request->mamon],
        ['MaLoai'=>$request->maloai],
      ]);

      return redirect()->route('danhsachsp');
    }
    // Xoa mot san pham
    public function xoasp($masp)
    {
      sanpham::where('MaSP',$masp)->delete();

      return "Xóa thành công!";
    }
}
