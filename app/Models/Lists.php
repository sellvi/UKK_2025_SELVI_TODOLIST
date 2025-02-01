<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    //nama tabel
    protected $table = "list";
   
    //kolom kolom nya
    protected $fillable =["nama"];
    //relasi
}
