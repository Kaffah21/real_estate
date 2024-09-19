<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiVillaController extends Controller
{
    public function index()
    {
      $villa= ['Villa 1','Villa 2','Villa 3'];
      return view('admin.properti_villa.index',compact('villa'));
    }
}
