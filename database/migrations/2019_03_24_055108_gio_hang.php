<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GioHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GioHang',function(Blueprint $table){
          $table->increments('MaGH');
          $table->integer('MaTV')->unsigned();
          $table->integer('MaSP')->unsigned();
          $table->integer('TongGia');
          $table->string('DiaChiGiaoHang');
          $table->rememberToken();
          $table->timestamps();
        });
        //Ràng buộc khóa ngoại
        Schema::table('GioHang',function($table){
          $table->foreign('MaTV')->references('MaTV')->on('ThanhVien');
          $table->foreign('MaSP')->references('MaSP')->on('SanPham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
