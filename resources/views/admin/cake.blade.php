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
                                    <button type="button" class="modal-open text-gray-500 hover:text-gray-100 mr-2">
                                        <i class="text-base">Xem</i>
                                    </button>
                                    <button href="#" class="text-yellow-400 hover:text-gray-100 mx-2">
                                        <i class="text-base">Sửa</i>
                                    </button>
                                    <button href="#" class="text-red-400 hover:text-gray-100 ml-2">
                                        <i class="text-base">Xóa</i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="z-50 modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-start justify-center">
                                <div class="modal-overlay absolute w-full h-full bg-gray-800 opacity-50"></div>
                                <div class="modal-container mt-10 bg-white w-1/2 mx-auto rounded shadow-lg z-50 overflow-y-auto">
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
                                        <form class="w-full max-w-lg">
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                    First Name
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                </div>
                                                <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                    Last Name
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                    Password
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                                                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap -mx-3 mb-2">
                                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                    <option>New Mexico</option>
                                                    <option>Missouri</option>
                                                    <option>Texas</option>
                                                    </select>
                                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                                    Zip
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                                                </div>
                                            </div>
                                        </form>
                                        <!--Footer-->
                                        <div class="flex justify-end pt-2">
                                            <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="mt-4 mx-auto">
        {{ $cakes->links() }}
    </div>

    
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    <script type="text/javascript">
        
    </script>
</x-admin-layout>