<x-admin-layout>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n + 6),
        tr th:nth-child(n + 6) {
            border-radius: 0 0.625rem 0.625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: 0.625rem 0 0 0.625rem;
        }
    </style>
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
                        <th class="p-3 text-left">Ngày cập nhật</th>
                        <th class="p-3 text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cakes as $cake)
                        <tr class="bg-primary-300 lg:text-black">
                            <td class="p-3 font-medium capitalize">Gazi Rahad</td>
                            <td class="p-3">gazi.rahad871@gmail.com</td>
                            <td class="p-3">01648349009</td>
                            <td class="p-3 uppercase">admin</td>

                            <td class="p-3">
                                <span class="bg-green-400 text-gray-50 rounded-md px-2"
                                    >ACTIVE</span
                                >
                            </td>
                            <td class="p-3 text-center">
                                <a href="#" class="text-gray-500 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">Xem</i>
                                </a>
                                <a href="#" class="text-yellow-400 hover:text-gray-100 mx-2">
                                    <i class="material-icons-outlined text-base">Sửa</i>
                                </a>
                                <a
                                    href="#"
                                    class="text-red-400 hover:text-gray-100 ml-2"
                                >
                                    <i class="material-icons-round text-base">Xóa</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    {{ $cakes->links() }}
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="mx-auto">
            {{ $cakes->links() }}
        </div>
    </div>
</x-admin-layout>