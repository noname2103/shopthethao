<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user_interface.index');
// });
//Hiện thị trang index
Route::get('/','UserController@trangchu')->name('trangchu');
// Hien trang dang ky nguoi dung
Route::get('dang-ky.html','UserController@getdangky')->name('getdangky');
// Xu ly thong tin dang ky thanh vien
Route::post('dang-ky.html','UserController@postdangky')->name('postdangky');
// Hien trang dang nhap nguoi dung
Route::get('dang-nhap.html','UserController@getdangnhap')->name('getdangnhap');
// Xu ly thong tin dang nhap thanh vien
Route::post('dang-nhap.html','UserController@postdangnhap')->name('postdangnhap');
// Hien trang gio hang
Route::get('gio-hang.html','UserController@giohang')->name('giohang');
// Them san pham vao gio hang
Route::get('addsp{masp}','UserController@themgiohang')->name('themgiohang');

// Xoa san pham khoi gio hang
Route::get('xoagiohang{magh}','UserController@xoagiohang')->name('xoagiohang');
// Hien trang xem chi tiet san pham
Route::get('themsoluong{magh}&{soluong}&{dongia}','UserController@themsoluong')->name('themsoluong');
// Route::get('{slug}&p{mabv}.html','UserController@xemsanpham')->name('xemsanpham');
//Hiện danh sách sp theo loai
Route::get('danh-sach&loai{maloai}.html','UserController@danhsachsptheoloai')->name('danhsachsptheoloai');
//Hiện danh sách sp theo mon the thao
Route::get('danh-sach&mon{mamon}.html','UserController@danhsachsptheomon')->name('danhsachsptheomon');
//Tim kiem
Route::get('search',['as'=>'search','uses'=>'UserController@getSearch']);
//Hien chi tiet san pham
Route::get('chitietsanpham&sanpham{masp}.html','UserController@chitietsanpham')->name('chitietsanpham');



// Phan admin
Route::get('bang-quan-tri.html','AdminController@dashboard')->name('dashboard');
// Trang dang nhap bang quan tri admin
Route::get('dang-nhap-admin-panel.html','AdminController@getdangnhapadmin')->name('getdanhnhapadmin');
// Xu ly su kien dang nhap bang quan tri cua admin
Route::get('dangnhapadmin','AdminController@postdangnhapadmin')->name('postdangnhapadmin');
//------------------- Noi dung phan quan ly san pham -------------------------------//
// Xem danh sach cac san pham
Route::get('danh-sach-san-pham.html','AdminController@danhsachsp')->name('danhsachsp');
// Trang them mot san pham
Route::get('them-san-pham.html','AdminController@getthemsp')->name('getthemsp');
// Xu ly them mot san pham
Route::post('themsp','AdminController@postthemsp')->name('postthemsp');
// Trang chinh sua mot san pham
Route::get('chinh-sua-san-pham&sp{masp}','AdminController@getsuasp')->name('getsuasp');
// Xu ly chinh sua mot san pham
Route::post('suasp','AdminController@postsuasp')->name('postsuasp');
// Xoa mot san pham
Route::get('xoa{masp}','AdminController@xoasp')->name('xoasp');
