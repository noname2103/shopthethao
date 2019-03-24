<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham',function(Blueprint $table){
          $table->increments('MaSP');
          $table->string('TenSP');
          $table->string('HinhAnh')->nullable();
          $table->text('MoTa')->nullable();
          $table->integer('Gia')->nullable();
          $table->integer('MaMon')->unsigned();
          $table->integer('MaLoai')->unsigned();
          $table->rememberToken();
          $table->timestamps();
        });
        //Ràng buộc khóa ngoại
        Schema::table('SanPham',function($table){
          $table->foreign('MaMon')->references('MaMon')->on('MonTheThao');
          $table->foreign('MaLoai')->references('MaLoai')->on('LoaiSanPham');
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
