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
        $con= Session::get('session_cart');
        if(session()->has('session_cart')){
            foreach(Session::get('session_cart') as $item => $value){
                if($value["id"]==$data["id"])
                    return redirect()->action(
                        [HomeController::class,'index'],['name'=>'home']
                    );
            }
            Session::push('session_cart',[
                'id'=>$data['id'],
                'flavor'=>$data['flavor'],
                'quantity'=>$data['quantity'],
                'note'=>$data['note'],
                ]);
                Session::flash('success','Add to cart successfully!');
                return redirect()->action(
                    [HomeController::class,'index'],['name'=>'home']
                );
        }else{
            Session::put('session_cart',[[
                'id'=>$data['id'],
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
