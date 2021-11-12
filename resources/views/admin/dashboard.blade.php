<x-admin-layout>
    <div class="w-full p-3 mx-auto mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full mx-auto">
                    <thead>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Mã đơn hàng
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Khách hàng
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Danh sách bánh
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Số lượng
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Ghi chú
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Trạng thái
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </thead>
                    <tbody class="bg-white">
                        
                            <tr class="">
                                <td style="color:black" class="px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200">1</td>
                                <td style="color:black" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <?php var_dump($orders)  ?>
                                    {{-- @foreach($orders->user as $user)
                                        @if($order->id == $user->id)['id'])
                                            <ul>
                                                <li>{{$user->get(name)}}</li>
                                                <li>{{$user['address']}}</li>
                                                <li>{{$user['phone']}}</li>
                                            </ul>
                                        @endif
                                        
                                    @endforeach --}}
                                </td>
                                <td style="color:black" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    
                                                <ul>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            
                                    
                                </td>
                                <td style="color:black" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                    </ul>
                                </td>
                                <td style="color:black" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">Giao hàng cả ngày</td>
                                <td style="color:red" class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">Đang xử lý</td>
                                <td style="color:black" class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Duyệt</a>
                                </td>
                                <td style="color:black" class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="#" class="text-red-400 hover:text-indigo-900">Xóa</a>
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>