<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thanhvien extends Model
{
  protected $table="khachhang";
  public $timetamps = true;
  protected $primaryKey="MaTV";
}
