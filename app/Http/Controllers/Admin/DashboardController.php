<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Image;
use App\Models\CakeDetail;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Http\Resources\OrderResource;
use App\Http\Resources\UserResource;

class DashboardController extends Controller
{
    function index()
    {
        $orders = Order::all();
        //$users = User::with($orders);
        // $users = User::with(['orders']);
        //$users = User::all();
        
        //return OrderResource::collection($orders->paginate(perPage:50))->response();
        return OrderResource::collection($orders)->response();
    
        // View ở trong admin/dashboarc
    }
}
