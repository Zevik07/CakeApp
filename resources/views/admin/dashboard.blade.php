<x-admin-layout>
    <div class="w-full p-3 mx-auto mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full mx-auto table text-gray-400 border-separate text-sm overflow-x-scroll">
                    <thead class="bg-primary text-white">
                        <th class="w-12 px-6 py-3 border-b border-gray-200 text-center text-xs leading-4 font-medium uppercase tracking-wider">
                            Mã đơn hàng
                        </th>
                        <th class=" px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Khách hàng
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Danh sách bánh
                        </th>
                        <th class="w-32 px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Số lượng
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Ghi chú
                        </th>
                        <th class="w-40 px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Trạng thái
                        </th>
                        <th colspan=2 class="px-6 py-3 border-b border-gray-200">Thao tác</th>
                        
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="bg-primary-300 lg:text-black">
                                <td class="w-12 px-6 py-4 whitespace-nowrap text-center border-b border-gray-200">{{$order->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <ul>
                                        <li>{{$order->user->name}}</li>
                                        <li>{{$order->user->address}}</li>
                                        <li>{{$order->user->phone}}</li>
                                    </ul>    
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200"> 
                                    <ul>
                                        @foreach($order->order_items as $order_item)
                                            @foreach($cakes as $cake)
                                                @foreach($cake->cake_details as $cake_detail)
                                                    @if($cake_detail->id == $order_item->cake_detail_id)
                                                        <li>{{$cake->name." ".$cake_detail->flavor}}</li>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="w-32 px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <ul>
                                        @foreach($order->order_items as $order_item)
                                        <li>{{$order_item->quantity}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">{{$order->note}}</td>
                                @if ($order->status == 'Đang xử lý')
                                    <td style="color:blue" class="w-40 px-6 py-4 whitespace-nowrap border-b border-gray-200">{{$order->status}}</td>
                                    <td style="color:black" class="w-32 px-6 py-4 text-center border-b border-gray-200 text-base leading-5 font-medium">
                                        <form action="{{ route('dashboard.update',$order->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="status" value="Đã xác nhận">
                                            <button class="text-indigo-600 hover:text-indigo-900">Duyệt</button>
                                        </form>
                                    </td>
                                    <td style="color:black" class="w-32 px-6 py-4 text-center border-b border-gray-200 text-base leading-5 font-medium">
                                        <form action="{{route('dashboard.destroy',$order->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="text-red-400 hover:text-indigo-900">Xóa</button>
                                        </form>
                                    </td>
                                @else
                                    <td style="color:red" class="w-40 px-6 py-4 whitespace-nowrap border-b border-gray-200">{{$order->status}}</td>
                                    <td class="w-32 px-6 py-4 text-center border-b border-gray-200 text-base leading-5 font-medium">
                                        <a class="text-pink-600">Đã duyệt</a>
                                    </td>
                                    <td style="color:black" class="w-32 px-6 py-4 text-center border-b border-gray-200 text-base leading-5 font-medium">
                                        <form action="{{route('dashboard.destroy',$order->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="text-red-400 hover:text-indigo-900">Xóa</button>
                                        </form>
                                    </td>
                                @endif
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-4 mx-auto">
        {{ $orders->links() }}
    </div>
</x-admin-layout>