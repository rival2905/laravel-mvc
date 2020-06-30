<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $data = ['firstname'=>$request->firstname,"lastname" =>$request->lastname];
        // dd($data);
        return view('welcome', $data);

    }
}
