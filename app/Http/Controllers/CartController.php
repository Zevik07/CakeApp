<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class CartController extends Controller
{   
    function index(){
        return view('cart');
    }

    public function detele(Request $request){
        $id = $request['id'];
        $cart =$request->session()->get('session_cart'); 
        foreach($cart as $index => $valuedetele){
            if($valuedetele['id']== $id){
                
                unset($cart[$index]); 
                 
                 
                 
                 }
                 
            }
            
        $request->Session()->put('session_cart', $cart);
        return back()->withInput();
    }
}
