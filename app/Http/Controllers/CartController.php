<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class CartController extends Controller
{   
    // function order(Request $req){
    //     $data=$req->input();
    //     Session::put('username',$data['username']);
    //     Session::put('address',$data['address']);
    //     Session::put('phone',$data['phone']);
    //     Session::put('email',$data['email']);
    //     $req->session()->flash('username', $data['username']);
    //     $req->session()->flash('id', $data['address']);
    //     $req->session()->flash('phone', $data['phone']);
    //     $req->session()->flash('email', $data['email']);
    //     return view('order');
        
    // }
    function index(){
        return view('cart');
    }
}
