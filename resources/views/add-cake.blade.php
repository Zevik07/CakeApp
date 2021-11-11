<x-admin-layout>
    <div id="table-area" class=" w-full p-3 mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-purple-700">Danh sách bánh</h2>
        <table class="table-fixed mx-auto">
            <thead>
                <tr>
                    <th class="border border-white"> </th>
                    {{-- <th class="border border-white">STT</th> --}}
                    <th class="border border-white">Tên</th>
                    <th class="border border-white">Hương vị</th>
                    <th class="border border-white">Giá</th>
                    <th class="border border-white">Số lượng</th>
                    <th class="border border-white">Mô tả</th>
                </tr>
            </thead>
            <tbody>

                    @foreach($cakes as $cake)
                        @foreach($details as $detail)
                            @if($detail['cake_id']==$cake['id'])
                                <tr class="parent">
                                    <input class="info_id" type="hidden" value="{{$detail['id']}}" name="id">
                                    <td class="p-2 border border-white">
                                        <input id={{$detail['id']}} class="radio-check" type="radio" value="{{$detail['id']}}" name="check">
                                        
                                    </td>
                                    {{-- <td class="info_detail p-2 border border-white">{{$detail['id']}}</td> --}}
                                    <td class="info_name p-2 border border-white">{{$cake['name']}}</td>
                                    <td class="info_flavor p-2 border border-white">{{$detail['flavor']}}</td>
                                    <td class="info_price p-2 border border-white">{{$cake['price']}}</td>
                                    <td class="info_quantity p-2 border border-white">{{$detail['quantity']}}</td>
                                    <td class="info_desc p-2 border border-white">{{$cake['desc']}}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                
            </tbody>
        </table>
        <div class="p-5 mx-auto">
            <button class="btn-add bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-auto rounded-full">Thêm</button>
            <button class="btn-edit bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-auto rounded-full">Sửa</button>
            {{-- <button class="btn-delete bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-auto rounded-full">Xóa</button> --}}
        </div>
    </div>
    <!--Form add new start-->
    <div id="form-add-area" class="w-1/3 p-3 mx-auto hidden">
        <h2 class="text-3xl font-bold m-5 text-purple-700">Thêm bánh</h2>
            <form id="form-add" action="{{ route('cake-add.store') }}" method="post">
                @csrf
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Tên</label>
                    <input name="name" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="mb-2 font-bold">Hương vị</label>
                    <input name="flavor" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Giá</label>
                    <input name="price" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Số lượng</label>
                    <input name="quantity" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Mô tả</label>
                    <textarea name="desc" style="color:black" type="text-area" rows="3" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600"></textarea>
                </div>
            </form>
            <div class="float-right">
                <button class="btn-cancel bg-gray-400 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full">Hủy</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" form="form-add" value="add" type="submit" name="add">Lưu</button>
            </div>
    </div>
    <!--Form add new end-->

    <!--Form edit start-->
    <div id="form-edit-area" class="w-1/3 p-3 mx-auto hidden">
        <h2 class="text-3xl font-bold m-5 text-purple-700">Sửa bánh</h2>
            <form id="form-edit" action="{{route('cake-add.store')}}" method="post">
                @csrf
                <div>
                    <input value name="id" id="input-id" style="color:black" type="text" readonly class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Tên</label>
                    <input value name="name" id="input-name" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="mb-2 font-bold">Hương vị</label>
                    <input value name="flavor" id="input-flavor" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Giá</label>
                    <input value name="price" id="input-price" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Số lượng</label>
                    <input value name="quantity" id="input-quantity" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Mô tả</label>
                    <textarea value name="desc" id="input-desc" style="color:black" type="text-area" rows="3" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600"></textarea>
                </div>
            </form>
            <div class="float-right">
                <button class="btn-cancel bg-gray-400 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full">Hủy</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" form="form-edit" type="submit" name="edit" value="edit">Lưu</button>
                <button class="bg-red-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" form="form-edit" type="submit" name="delete" value="delete">Xóa</button>
            </div>
    </div>
    <!--Form edit end-->
    
</x-admin-layout>