<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThanhVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThanhVien',function(Blueprint $table){
          $table->increments('MaTV');
          $table->string('TenKH');
          $table->string('Email');
          $table->integer('SDT')->nullable();
          $table->string('DiaChi')->nullable();
          $table->string('MatKhau');
          $table->string('AnhDaiDien')->nullable();
          $table->rememberToken();
          $table->timestamps();
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
