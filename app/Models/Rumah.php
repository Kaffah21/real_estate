<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $fillable = [
     'nama',
     'deskripsi',
     'harga',
     'alamat',
    ];
}
