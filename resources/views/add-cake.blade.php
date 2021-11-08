<x-admin-layout>
    
        
    <div class="w-full p-3 mx-auto">
        <h2 class="text-3xl font-bold mb-10 text-purple-700">Danh sách bánh</h2>
        <table class="table-fixed mx-auto border-collapse border border-white">
            <thead>
                <tr>
                    <th class="w-4 border border-white overflow-hidden">STT</th>
                    <th class="w-1/5 border border-white overflow-hidden">Tên</th>
                    <th class="w-1/5 border border-white overflow-hidden">Hương vị</th>
                    <th class="w-2/12 border border-white overflow-hidden">Giá</th>
                    <th class="w-1/12 border border-white overflow-hidden">Số lượng</th>
                    <th class="w-2/5 border border-white overflow-hidden">Mô tả</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <=5; $i++)
                <tr>
                    <td class="p-2 border border-white overflow-hidden">{{$i}}</td>
                    <td class="p-2 border border-white overflow-hidden">Tiramisu</td>
                    <td class="p-2 border border-white overflow-hidden">Chocolate</td>
                    <td class="p-2 border border-white overflow-hidden">30000</td>
                    <td class="p-2 border border-white overflow-hidden">5</td>
                    <td class="p-2 border border-white overflow-hidden">Mo ta</td>
                    <td class="p-2 border border-white overflow-hidden"><button class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Sửa</button></td>
                </tr>
                @endfor
            </tbody>
        </table>
        <div class="p-5 mx-auto">
            <button class="btn bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-auto rounded-full">Thêm</button>
        </div>
    </div>

    <div class="main-modal bg-gray-400 opacity-100 fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center hidden">
        <div class="modal-container bg-white w-2/5 md:max-w-11/12 p-6 mx-auto rounded-xl z-51 overflow-y-auto">
            <h2 class="text-3xl font-bold m-5 text-purple-700">Thêm bánh</h2>
            <form action="">
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
            </form>
        </div>
    </div>
    
</x-admin-layout>