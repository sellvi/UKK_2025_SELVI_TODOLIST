<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "task";
    protected $primaryKey = "id_task";
    protected $fillable = ["nama","status","tanggal","prioritas","id_list"];

}



?>