<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DanhGia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhGia',function(Blueprint $table){
          $table->increments('MaDG');
          $table->text('NoiDung')->nullable();
          $table->integer('SoLuongSao');
          $table->integer('MaTV')->unsigned();
          $table->integer('MaSP')->unsigned();
          $table->rememberToken();
          $table->timestamps();
        });
        //Ràng buộc khóa ngoại
        Schema::table('DanhGia',function($table){
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
