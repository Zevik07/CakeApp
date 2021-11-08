<x-admin-layout>
    <div id="table-area" class=" w-full p-3 mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-purple-700">Danh sách bánh</h2>
        <table class="table-fixed mx-auto">
            <thead>
                <tr>
                    <th class="border border-white"> </th>
                    <th class="border border-white">STT</th>
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
                                <td class="p-2 border border-white"><input id={{$detail['id']}} class="radio-check" type="radio" value="{{$detail['id']}}" name="check"></td>
                                <td class="info_detail p-2 border border-white">{{$detail['id']}}</td>
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
            <button class="btn-delete bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-auto rounded-full">Xóa</button>
        </div>
    </div>
    <div id="form-area" class="w-1/3 p-3 mx-auto hidden">
        <h2 class="text-3xl font-bold m-5 text-purple-700">Thêm bánh</h2>
            <form id="form-add" action="addcake">
                @csrf
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Tên</label>
                    <input value id="input-name" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="mb-2 font-bold">Hương vị</label>
                    <input value id="input-flavor" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Giá</label>
                    <input value id="input-price" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Số lượng</label>
                    <input value id="input-quantity" style="color:black" type="text" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:white" class="block mb-2 font-bold">Mô tả</label>
                    <textarea value id="input-desc" style="color:black" type="text-area" rows="3" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600"></textarea>
                </div>
            </form>
            <div class="float-right">
                <button class="btn-cancel bg-gray-400 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full">Hủy</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" form="form-add" value="submit">Lưu</button>
            </div>
    </div>
    {{-- <div class="main-modal bg-gray-400 opacity-100 fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center">
        <div class="modal-container bg-white w-2/5 md:max-w-11/12 p-6 mx-auto rounded-xl z-50 overflow-y-auto"> --}}
            {{-- <h2 class="text-3xl font-bold m-5 text-purple-700">Thêm bánh</h2>
            <form action="addcake">
                <div>
                    <label style="color:black" class="block mb-2 font-bold">Tên</label>
                    <input style="color:black" type="text" value="Tiramisu" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:black" class="mb-2 font-bold">Hương vị</label>
                    <input style="color:black" type="text" value="Chocolate" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:black" class="block mb-2 font-bold">Giá</label>
                    <input style="color:black" type="text" value="35000" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:black" class="block mb-2 font-bold">Số lượng</label>
                    <input style="color:black" type="text" value="5" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div>
                    <label style="color:black" class="block mb-2 font-bold">Mô tả</label>
                    <input style="color:black" type="text-area" rows="3" value="Mô tả" class="w-full border-2 border-gray-200 p-1 rounded outline-none focus:border-blue-600">
                </div>
                <div class="float-right">
                    <button class="bg-gray-400 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full" value="Cancel">Hủy</button>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" value="submit">Lưu</button>
                </div>
            </form> --}}
        {{-- </div>
    </div> --}}
    
</x-admin-layout>