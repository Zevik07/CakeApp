<script>
    function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
    
    function is_phonenumber(phonenumber) {
        var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        if(phonenumber.match(phoneno)) {
            return true;
        }  
        else {  
            return false;
        }
    }
    function check(e){
        var str=document.formcake.phone.value;
        var struser=document.formcake.username.value;
        var straddress=document.formcake.address.value;
        var strgmail=document.formcake.email.value;
        if(str.length== 0 || strgmail.length == 0 || struser.length == 0 || straddress.length == 0){
            alert("Vui lòng nhập đầy đủ thông tin");
        }

        if(!is_phonenumber(str)) {
            alert("Số điện thoại không hợp lệ");
            e.preventDefault()
        }
        if(!validateEmail(strgmail)){
            alert("Email không hợp lệ");
            e.preventDefault()
		}
    }
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Giỏ hàng
        </h2>
    </x-slot>
<?php
$i = 0;
?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="cart-page">
                    <div class="body-cart">
                    <div class="wp-content-cart">
                    <form action="{{route('order')}}" method="GET" name="formcake">
                        <table class="table table-bordered">
                            <tr class="title">
                                <th>STT</th>
                                <th>Tên bánh</th>
                                <th>Hương vị</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                                <th>Xóa</th>
                            </tr>
                            <?php
                                $tongtien = 0;
                            ?>
                              @if (session()->has('session_cart'))
                               @foreach(Session::get('session_cart') as $cart => $value)
                                <?php
                                    $flavor_name = DB::table('cake_details')->where('id', '=', $value["id"])->value('name');
                                    $tong = $value["price"] * $value["quantity"];
                                    $tongtien = $tongtien + $tong;
                                    $i++;
                                ?>
                                <tr class="list">
                                    <th><?php echo $i ?></th>
                                    <th>{{$value["name"]}}</th>
                                    <th>{{ $flavor_name }}</th>
                                    <th>{{$value["price"]}}</th>
                                    <th>{{$value["quantity"]}}</th>
                                    <th><?php echo $tong ?></th>
                                    <th><a href="{{route('detelecake', ['id' => $value['id']])}}">Xóa</a></th>
                                </tr>

                               @endforeach
                             @endif
                                <tr class="list">
                                    <td colspan="5" class="price"><b>Tổng số tiền</b></td>
                                    <td class="pricenumber"><b><?php echo $tongtien ?></b></td>
                                    <td></td>
                                </tr>
                        </table>
                        @if (!session()->has('session_cart'))<?php echo '

                                <h1 class="notcake">Không có sản phẩm nào trong giỏ hàng</h1>
                              ';
?>
                        @endif
                        @if (session()->has('success1'))

                             <div class="modal pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                 <div class="modal-overlay pointer-events-none absolute w-full h-full bg-gray-900 opacity-50"></div>
                                 <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                     <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                     <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                     </svg>
                                      <span class="text-sm">(Esc)</span>
                                     </div>


                                      <div class="modal-content py-4 text-left px-6">

                                         <div class="flex justify-between items-center pb-3">
                                              <p class="text-2xl font-bold">Thông báo!</p>
                                                  <div class="modal-close cursor-pointer z-50">
                                                      <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                                      </svg>
                                          </div>
                                 </div>



                                      <p>{{Session::get('success1')}}</p>



                                         <div class="flex justify-end pt-2">

                                             <div class="modal-close px-4 bg-primary p-3 rounded-lg text-white">Đóng</div>
                                         </div>

                                 </div>
                              </div>
                           </div>
                           <script>
                             var openmodal = document.querySelectorAll('.modal-open')
                             for (var i = 0; i < openmodal.length; i++) {
                                 openmodal[i].addEventListener('click', function(event){
                                 event.preventDefault()
                                 toggleModal()
                                  })
                              }

                             const overlay = document.querySelector('.modal-overlay')
                             overlay.addEventListener('click', toggleModal)

                             var closemodal = document.querySelectorAll('.modal-close')
                             for (var i = 0; i < closemodal.length; i++) {
                             closemodal[i].addEventListener('click', toggleModal)
                             }

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
                                  body.classList.toggle('modal-active')
                                 }

                         </script>

                     @endif
                        @if (session()->has('session_cart')) 
                        <?php echo '
                        <div class="form">
                            <h2 class="titleuser">Thông tin khách hàng</h2>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="item">
                                        <p class="reset">Họ và tên
                                            <span class="red">*</span>
                                        </p>

                                        <div class="icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" name="username" class="required" placeholder="Họ và tên" value="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="item">
                                        <p class="reset">Địa chỉ
                                            <span class="red">*</span>
                                        </p>
                                        <div class="icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <input type="text" name="address" class="required" placeholder="Địa chỉ">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="item">
                                        <p class="reset"> Điện thoại
                                            <span class="red">*</span>
                                        </p>
                                        <div class="icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" name="phone" class="required" placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="item">
                                        <p class="reset"> Email
                                            <span class="red">*</span>
                                        </p>
                                        <div class="icon">
                                            <i><ion-icon name="mail-outline"></ion-icon></i>
                                        </div>
                                        <input type="text" name="email" class="required" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="item">
                                        <p class="reset">Ghi chú</p>
                                        <textarea name="textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="control-button">
                                    <button class="button" onclick="check(event);" type="submit">Gửi thông tin</button>
                                </div>
                        </div>';
?>
                        @endif
                        </form>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
