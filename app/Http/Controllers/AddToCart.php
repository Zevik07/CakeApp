<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Symfony\Component\HttpFoundation\Session\Session;

class AddToCart extends Controller
{
    function add(Request $req){
         //return $req->input();
        $data = $req->input();
        if($req->session()->exists('id')){
            $session = Session::push('session_cart',[[
                'id'=>$data['id'],
                'name'=>$data['name'],
                'flavor'=>$data['flavor'],
                'quantity'=>$data['quantity'],
                'note'=>$data['note'],
                ]]);
            
                Session::flash('success','Add to cart successfully!');
                return redirect()->action(
                    [HomeController::class,'index'],['name'=>'home']
                );
        }else{
            $session = Session::put('session_cart',[[
                'id'=>$data['id'],
                'name'=>$data['name'],
                'flavor'=>$data['flavor'],
                'quantity'=>$data['quantity'],
                'note'=>$data['note'],
                ]]);
                Session::flash('success','Add to cart successfully!');
                return redirect()->action(
                    [HomeController::class,'index']
                );
        }
        
    }
}
