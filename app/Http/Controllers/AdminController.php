<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\loaisanpham;
use App\monthethao;
use App\admin;
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
    // Xu ly dang nhap admin
    public function postdangnhapadmin(Request $request)
    {
      $admin = admin::where([
        ['Ten',$request->taikhoan],
        ['MatKhau',$request->matkhau]
      ])->first();
      if(isset($admin))
      {
        session()->put('adminlogin',$admin->MaAdmin);
        return redirect()->route('dashboard');
      }
      else
      {
        return redirect()->back();
      }
    }
    // Trang danh sach san pham
    public function danhsachsp()
    {
      $sanpham = sanpham::orderBy('MaSP','desc')->get();
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
      //$sp->NoiSX = $request->noisx;
      $sp->Gia = $request->gia;
      $sp->MaMon = $request->mamon;
      $sp->MaLoai = $request->maloai;
      if($request->hasFile('hinhanh'))
      {
          $file = $request -> file('hinhanh');
          $duoi = $file->getClientOriginalExtension();
          if($duoi !='jpg' && $duoi !='png')
          {
              return redirect()->route('dangbaiviet')->with('thongbao','chỉ được chọn file đuôi jpg hoặc png');
          }

          $name = $file->getClientOriginalName();
          $Hinh= str_random(5)."_".$name;
          while(file_exists("img/anhsp".$Hinh))
          {
              $Hinh= str_random(5)."_".$name;
          }
          $file->move("img/anhsp",$Hinh);
          $sp->HinhAnh = $Hinh;
      }
      $sp->save();

      return redirect()->route('danhsachsp');
    }

    // Trang hien thi chinh sua mot san pham
    public function getsuasp($masp)
    {
      $sanpham = sanpham::where('MaSP',$masp)->first();
      $loai = loaisanpham::all();
      $mon = monthethao::all();
      return view('admin_panel.topic.edit_topic',['sanpham'=>$sanpham,'loai'=>$loai,'mon'=>$mon]);
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
