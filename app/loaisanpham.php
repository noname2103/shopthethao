<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
  protected $table="loaisanpham";
  public $timetamps = true;
  protected $primaryKey="MaLoai";
}
