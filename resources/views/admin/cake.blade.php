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
                        <button method="cake-add"
                        class="modal-open bg-primary text-white py-1 px-3 rounded">
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
                                    <button method="cake-view" type="button" data-id="{{ $cake->id }}" class="cake-view modal-open text-gray-500 hover:text-gray-100 mr-2">
                                        <i class="text-base">Xem</i>
                                    </button>
                                    <button method="cake-edit" href="#" data-id="{{ $cake->id }}" class="cake-edit modal-open text-yellow-400 hover:text-gray-100 mx-2">
                                        <i class="text-base">Sửa</i>
                                    </button>
                                    <button method="cake-delete" href="#" data-id="{{ $cake->id }}" class="cake-delete text-red-400 hover:text-gray-100 ml-2">
                                        <i class="text-base">Xóa</i>
                                    </button>
                                </td>
                            </tr>

                        </div>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="z-50 modal pb-10 opacity-0 pointer-events-none absolute w-full h-auto top-0  left-0 right-0 flex items-start justify-center">
                    <div class="modal-overlay fixed bg-gray-800 opacity-50 top-0 left-0 right-0 bottom-0">
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
                            <form class="w-full modal-form" method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <input id="form-method" type="hidden" name="_method" value="PATCH">
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
                                <div class="-mx-3 mb-2 ">
                                    <div class="w-full px-3 mb-6 md:mb-0 ">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                            Hình ảnh
                                        </label>
                                        <div id="cake-imgs" class="w-full flex justify-start overflow-x-scroll">

                                        </div>
                                        <label id="img-choose" for="img-upload" 
                                        class="w-48 mt-2 appearance-none block bg-gray-200 text-center text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        Chọn ảnh</label>
                                        <input 
                                        id="img-upload"
                                        class="hidden"
                                        type="file" 
                                        name="images[]"
                                        multiple
                                        accept="image/*">
                                        <div id="file-upload-filename"></div>
                                    </div>
                                </div>
                                <div class="flex justify-end pt-2">
                                    <button type="submit"
                                    class="modal-save px-4 bg-primary p-3 rounded-lg text-white hover:bg-primary-700">Lưu</button>
                                    <button class="modal-close ml-2 px-4 bg-gray-400 p-3 rounded-lg text-white hover:bg-gray-300">Đóng</button>
                                </div>
                            </form>
                            <!--Footer-->
                            
                        </div>
                    </div>
                </div>
                <!-- Modal Noti -->
                <div class="z-50 pointer-events-none modal-noti pb-10 opacity-0 fixed w-full h-full top-0 left-0 right-0 flex items-start justify-center">
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
                                Xóa bánh và các thông tin liên quan ?
                            </p>
                            <!--Footer-->
                            <button class="modal-noti-close ml-2 px-4 bg-gray-400 p-3 rounded-lg text-white hover:bg-gray-300">Đóng</button>
                            <button type = "submit"
                            class="modal-noti-submit ml-2 px-4 bg-primary p-3 rounded-lg text-white hover:bg-primary-700">Xác nhận</button>
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

        // Modal event
        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);
        var openmodal = document.querySelectorAll('.modal-open')

        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(e){
                e.preventDefault()
                toggleModal()
                setCtrl(this)
            })
        }
        // Close
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', function (e) {
                toggleModal()
                e.preventDefault()
            })
        }
        // Esc
        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
            isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };

        function toggleModal () {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }

        // Fetch data 
        function fetchData(btn) {
            let id = btn.dataset.id;
            url = window.location.pathname + "/" + id;
            fetch(url, {
                method: 'GET',
                headers: {
                'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                $("#cake-name").value = data.name;
                $("#cake-desc").value = data.desc;
                $("#cake-price").value = data.price;

                //flavor
                $("#cake-flavor").value = "";
                data.cake_details.forEach(element => {
                    $("#cake-flavor").value +=  element.flavor + '\r\n';
                });
                // Load img
                $("#cake-imgs").innerHTML = "";
                data.imgs.forEach((element, index) => {
                    let img = document.createElement("img");
                    img.src = element.url;
                    img.classList = "object-cover bg-gray-300 mx-1";
                    $("#cake-imgs").append(img);
                });
            })
        }
        function setCtrl(btn) {
            const method = btn.getAttribute("method");
            const btnSave = $(".modal .modal-save");
            const btnClose = $(".modal button.modal-close");
            const form = $(".modal-form");
            if (!method) return;

            switch (method) {
                case 'cake-view':
                    fetchData(btn)
                    btnSave.classList.add("hidden");
                    btnClose.classList.remove("hidden");
                    $("#img-choose").classList.add("hidden")
                    break;
                case 'cake-edit':
                    fetchData(btn)
                    btnSave.classList.remove("hidden");
                    btnClose.classList.remove("hidden");
                    $("#img-choose").classList.remove("hidden")

                    btnSave.onclick = function (e) {
                        
                        if (!validateForm()) {
                            e.preventDefault();
                            return;
                        }
                        //Form method
                        let id = btn.dataset.id;
                        url = window.location.pathname + "/" + id;

                        // Nhớ validate
                        $("#form-method").value = "PATCH"
                        form.action = url
                        form.method = "POST" 
                        form.submit();

                    }
                    break;
                case 'cake-add':
                    $("#img-choose").classList.remove("hidden")
                    $("#cake-name").value = "";
                    $("#cake-desc").value = "";
                    $("#cake-price").value = "";
                    $("#cake-imgs").innerHTML = "";
                    $("#file-upload-filename").innerHTML = ""

                    //flavor
                    $("#cake-flavor").value = "";


                    //Form method
                    url = window.location.pathname;

                    // Nhớ validate
                    $("#form-method").value = "POST"
                    form.action = url
                    form.method = "POST" 
                    
                    $(".modal-noti-submit").onclick = function (e) {
                        if (!validateForm()) {
                            e.preventDefault();
                            return;
                        }
                        else
                            form.submit();
                    }
                    
                    break;
                default:
                    break;
            }
        }

        // Modal event
        const overlayNoti = $('.modal-noti-overlay')
        overlayNoti.addEventListener('click', toggleModalNoti)
        var closemodalNoti = document.querySelectorAll('.modal-noti-close')
        for (var i = 0; i < closemodalNoti.length; i++) {
            closemodalNoti[i].addEventListener('click', function (e) {
                toggleModalNoti()
            })
        }

        function toggleModalNoti() {
            const modal = document.querySelector('.modal-noti')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
        }
        // Delete 
        Array.from($$('.cake-delete')).forEach(element => {
            element.onclick = function () {
                toggleModalNoti()
                let id = this.dataset.id;

                $('.modal-noti-submit').onclick = function () {
                    url = window.location.pathname + "/" + id;
                    fetch(url, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            "X-CSRF-Token": $('input[name=_token]').value
                        },
                    })
                    .then(rp => rp.json())
                    .then(data => {
                        if (data.status == 'success')
                            location.reload();
                        else 
                            alert("Có gì đó sai sai");
                    })
                }
            }
        });

        //  Image nname
        var input = document.getElementById('img-upload');
        input.addEventListener('change', function () {
            var output = document.getElementById('file-upload-filename');
            var children = "";
            for (var i = 0; i < input.files.length; ++i) {
                children += '<li>' + input.files.item(i).name + '</li>';
            }
            output.innerHTML = '<ul>'+children+'</ul>';
        });

        // Validate form
        function validateForm() {
            let name = $("#cake-name").value
            let desc = $("#cake-desc").value
            let price = $("#cake-price").value
            let flavor = $("#cake-flavor").value

            if (!name.trim() ||
            !desc.trim() ||
            !price ||
            !flavor.trim())
            {
                alert("Các trường không được phép để trống")
                return false
            }
            return true
        }

    </script>
</x-admin-layout>