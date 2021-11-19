<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
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
        $orders = Order::paginate(5);
        $cakes = Cake::all();
        return view('admin.dashboard', [
            'orders' => OrderResource::collection($orders),
            'cakes' => CakeResource::collection($cakes)]);
    }
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        Session::flash('confirm','Duyệt đơn hàng thành công!!!!');
        return back()->withInput();
    }
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        Session::flash('delete','Xóa đơn hàng thành công !!!');
        return back()->withInput();
    }
}
