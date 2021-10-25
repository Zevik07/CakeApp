<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddToCart extends Controller
{
    function add(Request $req){
        // return $req->input();
        $data = $req->input();
        $req->session()->flash('id', $data['id']);
        $req->session()->flash('flavor', $data['flavor']);
        $req->session()->flash('quantity', $data['quantity']);
        $req->session()->flash('note', $data['note']);
        return redirect('cart');
        // return view('cart');
    }
}
