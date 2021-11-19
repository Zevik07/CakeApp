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
                        <th class="w-32 px-6 py-3 border-b border-gray-200 text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Tổng tiền
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
                                <td class="w-12 px-6 py-4 whitespace-nowrap text-center border-b border-gray-200">DH{{$order->id}}</td>
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
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-200">
                                    <ul> 
                                        <?php $price =0;  ?>
                                        @foreach ($order->order_items as $order_item)
                                        <?php
                                           $price += $order_item->quantity*$order_item->price;
                                        ?>
                                        @endforeach
                                        <li><?php echo $price; ?></li>
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
                                        <button data-id="{{$order->id}}" class="btn-delete-order text-red-400 hover:text-indigo-900">Xóa</button>
                                    </td>
                                @else
                                    <td style="color:red" class="w-40 px-6 py-4 whitespace-nowrap border-b border-gray-200">{{$order->status}}</td>
                                    <td class="w-32 px-6 py-4 text-center border-b border-gray-200 text-base leading-5 font-medium">
                                        <a class="text-pink-600">Đã duyệt</a>
                                    </td>
                                    <td style="color:black" class="w-32 px-6 py-4 text-center border-b border-gray-200 text-base leading-5 font-medium">
                                        <button data-id="{{$order->id}}" class="btn-delete-order text-red-400 hover:text-indigo-900">Xóa</button>
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
    <div class="z-50 modal-noti pointer-events-none pb-10 opacity-0 fixed w-full h-full top-0 left-0 right-0 flex items-start justify-center">
        <div class="modal-noti-overlay fixed bg-gray-800 opacity-50 top-0 left-0 right-0 bottom-0">
        </div>
        <div class="modal-noti-container mt-10 bg-white w-1/2 mx-auto rounded shadow-lg z-50 ">
            <!-- Add margin if you want to see some of the overlay behind the modal-noti-->
            <div class="modal-noti-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">
                        Xác nhận
                    </p>
                    <div class="modal-noti-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>
                <!--Body-->
                <p class="modal-noti-noti-msg">
                    Xóa đơn hàng. Sau khi xóa sẽ không thể khôi phục dữ liệu!!
                </p>
                <!--Footer-->
                <button class="modal-noti-close ml-2 px-4 bg-gray-400 p-3 rounded-lg text-white hover:bg-gray-300">Đóng</button>
                <button type = "submit"
                class="modal-noti-submit ml-2 px-4 bg-primary p-3 rounded-lg text-white hover:bg-primary-700">Xác nhận</button>
            </div>
        </div>
    </div>

    
    @if(Session::has('confirm'))
        <script>
            swal("Thành công","{!! Session::get('confirm') !!}","success",{
                button:"OK",
            });
        </script>
    @endif
    @if(Session::has('delete'))
        <script>
            swal("Thành công","{!! Session::get('delete') !!}","success",{
                button:"OK",
            });
        </script>
    @endif
    <script>
        const $ = document.querySelector.bind(document);
        const overlayNoti = $('.modal-noti-overlay')
        overlayNoti.addEventListener('click', toggleModalNoti)
        var closemodalNoti = document.querySelectorAll('.modal-noti-close')
        for (var i = 0; i < closemodalNoti.length; i++) {
            closemodalNoti[i].addEventListener('click', function (e) {
                toggleModalNoti()
                
            })
        }
        var openmodalNoti = document.querySelectorAll('.btn-delete-order')
        for (var i = 0; i < openmodalNoti.length; i++) {
            openmodalNoti[i].addEventListener('click', function (e) {
                toggleModalNoti()
                var btn = this
                $('.modal-noti-submit').onclick = function () {
                    fetchData(btn)
                }
            })
        }

        function toggleModalNoti() {
            const modal = document.querySelector('.modal-noti');
            modal.classList.toggle('opacity-0');
            modal.classList.toggle('pointer-events-none');
        }
        function fetchData(btn) {
            let id = btn.dataset.id;
            url = window.location.pathname + "/" + id;
            fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        "X-CSRF-Token": $('input[name=_token]').value
                    },
                })
                 .then(rp => rp.text())
                 .then(function(){
                     location.reload();
                 })
                // .then(data => {
                //     console.log(data);
                
            
        }
    </script>
</x-admin-layout>