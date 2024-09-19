<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPenyewaController extends Controller
{
   public function index()
   {
    $penyewa = ['Penyewa 1','Penyewa 2','Penyewa 3'];
    return view('admin.data_penyewa.index', compact('penyewa'));
   }

}
