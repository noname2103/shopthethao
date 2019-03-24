<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
  protected $table="sanpham";
  public $timetamps = true;
  protected $primaryKey="MaSP";
}
