<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinCompanyController extends Controller
{
    public function showForm(){
        return view('bergabung');
    }
    public function submitForm(Request $request){

        //validasi request
        $validate = $request->validate([
         'name' => 'required|numeric|max:255',
         'email' => 'required|email|max:255',
         'phone' => 'required|string|max:255',
         'cover_letter'=> 'required|string'
        ]);
        return redirect()->back()->with('sucsess','Permintaan telah dikirim');
    }
}
