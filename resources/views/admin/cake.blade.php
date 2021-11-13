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
                        <div class="cake-item" x-data="{ 'showModal': false }">
                            <tr class="cake bg-primary-300 lg:text-black">
                                <td class="cake-id p-3 font-medium capitalize">{{ $cake->id }}</td>
                                <td class="p-3">{{ $cake->name }}</td>
                                <td class="p-3 max-w-xs whitespace-nowrap overflow-hidden overflow-ellipsis">{{ $cake->desc }}</td>
                                <td class="p-3 uppercase">{{ 1 }}</td>
                                <td class="p-3 uppercase">{{ $cake->price }}</td>
                                <td class="p-3 uppercase">{{ date('d-m-Y', strtotime($cake->updated_at)) }}</td>
    
                                <td class="p-3 text-center">
                                    <button type="button" x-on:click="isModalOpen = true" class="text-gray-500 hover:text-gray-100 mr-2">
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
                            <div class="mx-auto w-full bg-gray-100 flex items-center justify-center h-screen" x-show="showModal" @keydown.escape="showModal = false" x-cloak>

                                <div class="flex flex-wrap p-4 h-full items-center">

                                    <button type="button" class="bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" @click="showModal = true">Open modal</button>

                                    <!--Overlay-->
                                    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
                                        <!--Dialog-->
                                        <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="showModal = false" x-transition>
                                            <!-- content -->
                                            <p>Modal content can go here</p>
                                            <p>...</p>
                                            <p>...</p>
                                            <p>...</p>
                                            <p>...</p>

                                            <!--Footer-->
                                            <div class="flex justify-end pt-2">
                                                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" @click="alert('Additional Action');">Action</button>
                                                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400" @click="showModal = false">Close</button>
                                            </div>


                                        </div>
                                        <!--/Dialog -->
                                    </div><!-- /Overlay -->

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