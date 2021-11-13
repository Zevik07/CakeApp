<x-admin-layout>
    <div class="flex w-full items-center justify-center bg-white">
        <div class="w-full">
            <div class="overflow-auto lg:overflow-visible">
            <div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
                <h2 class="text-2xl text-gray-500 font-bold">Danh sách bánh</h2>
                <!-- <div class="text-center flex-auto">
                    <input
                        type="text"
                        name="search"
                        placeholder="Tìm kiếm..."
                        class="
                        rounded
                        w-1/3
                        py-2
                        border-b-2 border-blue-600
                        outline-none
                        focus:border-yellow-400
                        "
                    />
                </div> -->

                <div>
                    <a href="#">
                        <button
                        class="
                            bg-primary
                            text-white
                            py-1
                            px-3
                            sm
                            rounded-full
                        "
                        >
                        Thêm
                        </button>
                    </a>
                   
                </div>
            </div>
            <table class="w-full table text-gray-400 border-separate space-y-6 text-sm">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="p-3 text-left">Mã</th>
                        <th class="p-3 text-left">Tên</th>
                        <th class="p-3 text-left">Mô tả</th>
                        <th class="p-3 text-left">Số lượng còn</th>
                        <th class="p-3 text-left">Giá</th>
                        <th class="p-3 text-left">Ngày cập nhật</th>
                        <th class="p-3 text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cakes as $cake)
                        <div class="cake-item">
                            <tr class="cake bg-primary-300 lg:text-black">
                                <td class="cake-id p-3 font-medium capitalize">{{ $cake->id }}</td>
                                <td class="p-3">{{ $cake->name }}</td>
                                <td class="p-3 max-w-xs whitespace-nowrap overflow-hidden overflow-ellipsis">{{ $cake->desc }}</td>
                                <td class="p-3 uppercase">{{ 1 }}</td>
                                <td class="p-3 uppercase">{{ $cake->price }}</td>
                                <td class="p-3 uppercase">{{ date('d-m-Y', strtotime($cake->updated_at)) }}</td>
    
                                <td class="p-3 text-center">
                                    <button type="button" data-id="{{ $cake->id }}" class="cake-view modal-open text-gray-500 hover:text-gray-100 mr-2">
                                        <i class="text-base">Xem</i>
                                    </button>
                                    <button href="#" data-id="{{ $cake->id }}" class="cake-edit modal-open text-yellow-400 hover:text-gray-100 mx-2">
                                        <i class="text-base">Sửa</i>
                                    </button>
                                    <button href="#" class="cake-viewtext-red-400 hover:text-gray-100 ml-2">
                                        <i class="text-base">Xóa</i>
                                    </button>
                                </td>
                            </tr>

                        </div>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="z-50 modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-start justify-center overflow-y-scroll">
                    <div class="modal-overlay absolute w-full bg-gray-800 opacity-50 top-0 left-0 right-0">
                        
                    </div>
                    <div class="modal-container mt-10 bg-white w-1/2 mx-auto rounded shadow-lg z-50 ">
                        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                            <span class="text-sm">(Esc)</span>
                        </div>
                        <!-- Add margin if you want to see some of the overlay behind the modal-->
                        <div class="modal-content py-4 text-left px-6">
                            <!--Title-->
                            <div class="flex justify-between items-center pb-3">
                                <p class="text-2xl font-bold">
                                    Thông tin bánh
                                </p>
                                <div class="modal-close cursor-pointer z-50">
                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!--Body-->
                            <form class="w-full">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Tên bánh
                                        </label>
                                        <input id="cake-name" class="appearance-none block w-full text-gray-700 border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  
                                        type="text" placeholder="Nhập tên bánh"
                                        name="name">
                                        <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                                    </div>
                                    <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            Mô tả
                                        </label>
                                        <textarea class="ppearance-none block w-full text-gray-700 border border-gray-200 rounded mb-3  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                        name="desc" id="cake-desc" cols="30" rows="3" placeholder="Mô tả"></textarea>
                                    </div>
                                    <div class="w-full px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Giá bán
                                        </label>
                                        <input id="cake-price" class="appearance-none block w-full text-gray-700 border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  
                                        type="number" placeholder="Nhập giá bánh"
                                        name="price">  
                                    </div>
                                    <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            Các vị bánh
                                        </label>
                                        <textarea id="cake-flavor" class="ppearance-none block w-full text-gray-700 border border-gray-200 rounded mb-3  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                                        name="flavors" id="" cols="30" rows="3" placeholder="Mô tả"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-2 ">
                                    <div class="w-full px-3 mb-6 md:mb-0 ">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                            Hình ảnh
                                        </label>
                                        <div id="cake-imgs" class="w-full flex justify-start overflow-x-scroll">

                                        </div>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  
                                        type="button" value="Chọn ảnh">
                                    </div>
                                </div>
                                <div class="flex justify-end pt-2">
                                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Đóng</button>
                                </div>
                            </form>
                            <!--Footer-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 mx-auto">
        {{ $cakes->links() }}
    </div>

    <script type="text/javascript">
        
    </script>
</x-admin-layout>