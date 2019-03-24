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
// Hien trang xem chi tiet san pham
Route::get('{slug}&p{mabv}.html','UserController@xemsanpham')->name('xemsanpham');
