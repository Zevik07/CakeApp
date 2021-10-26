<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Symfony\Component\HttpFoundation\Session\Session;

class AddToCart extends Controller
{
    function add(Request $req){
        // return $req->input();
        $data = $req->input();
        if($req->session()->exists('id')){
            Session::push('session_cart',[[
                'id'=>$data['id'],
                'flavor'=>$data['flavor'],
                'quantity'=>$data['quantity'],
                'note'=>$data['note'],
                ]]);
                Session::flash('sussces','Add to cart successfully!');
                return redirect()->action(
                    [HomeController::class,'index'],['name'=>'home']
                );
        }else{
            Session::push('session_cart',[[
                'id'=>$data['id'],
                'flavor'=>$data['flavor'],
                'quantity'=>$data['quantity'],
                'note'=>$data['note'],
                ]]);
                Session::flash('sussces','Add to cart successfully!');
                return redirect()->action(
                    [HomeController::class,'index']
                );
        }
        // Session::put('id',$data['id']);
        // Session::put('flavor',$data['flavor']);
        // Session::put('quantity',$data['quantity']);
        // Session::put('note',$data['note']);
        // $req->session()->flash('id', $data['id']);
        // $req->session()->flash('flavor', $data['flavor']);
        // $req->session()->flash('quantity', $data['quantity']);
        // $req->session()->flash('note', $data['note']);
        
        // return view('cart');
    }
}
