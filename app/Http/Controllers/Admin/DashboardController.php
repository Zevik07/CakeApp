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
use App\Http\Resources\Cake as CakeResource;

class DashboardController extends Controller
{
    function index()
    {
        $orders = Order::all();
        // $users = User::with($orders);
        // $users = User::with(['orders']);
        // $users = User::all();
        $cakes = Cake::all();
        //return OrderResource::collection($orders->paginate(perPage:50))->response();
        
        // View ở trong admin/dashboarc
        return view('admin.dashboard', ['orders' => OrderResource::collection($orders),'cakes' => CakeResource::collection($cakes)]);
    }
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect('admin/dashboard');
    }
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('admin/dashboard');
    }
}
