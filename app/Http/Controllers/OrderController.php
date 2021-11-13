<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cake;
use App\Models\CakeDetail;

class OrderController extends Controller
{
    public function getForm(Request $request){
       $value= $request->all();
       $subtring=substr($value['email'],strlen($value['email'])-10,strlen($value['email']));
      if($value['textarea']!="" && $value['username']!="" && $value['address']!="" &&  $value['phone']!="" && $value['email']!="" && $subtring=="@gmail.com" && ctype_digit($value['phone'])){
       $user= User::Create([
           'name' => $value['username'],
           'address' => $value['address'],
           'phone' => $value['phone'],
           'email' => $value['email'],
           'role_id' => '1'

       ]);
       $order = Order::Create([
           'user_id' =>$user['id'],
           'note' => $value['textarea'],
           'status' => 'Đang xử lý'
       ]);
       foreach(Session::get('session_cart') as $cart_order => $valueorder) {
       $order_item = OrderItem::Create([
            'order_id' => $order['id'],
            'cake_detail_id' => $valueorder['id'],
            'quantity' => $valueorder['quantity'],
            'note' => '1'
           
       ]);
    }
}
        
        return back()->withInput();
        
    }
    
    //  public function handleRequest(Request $request){
    //     $request->input('username');
    //      return $request->all();
    //  }
}
