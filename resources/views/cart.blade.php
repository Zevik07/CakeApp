<script>
    function check(){
        var str=document.formcake.phone.value;
        var struser=document.formcake.username.value;
        var straddress=document.formcake.address.value;
        var strgmail=document.formcake.email.value;
        if(str.length== 0 || strgmail.length == 0 || struser.length == 0 || straddresslength == 0){
            alert("Vui lòng nhập đầy đủ thông tin"); 
        }

        for(var i=0; i<str.length;i++){
		var n=str.charCodeAt(i);
		if(n<48 || n>57){
            
			alert("Số điện thoại phải là chữ số"); break;
		    }
        }

		var substr=strgmail.substring(strgmail.length-10, strgmail.length);
		if(substr!='@gmail.com'){
            
			alert("Gmai không hợp lệ");
		}
    }
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Giỏ hàng
        </h2>
    </x-slot>
<?php 
    $i=0; 
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
                                <th>Tên sản phẩm</th>
                                <th>Mã sản phẩm</th>
                                <th>Tình trạng</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Xóa</th>
                            </tr>
                             @foreach(Session::get('session_cart') as $cart => $value) 
                                
                                     <tr class="list">
                                         <th></th>
                                         <th>{{$value["id"]}}</th>
                                        <th>{{$value["flavor"]}}</th>
                                        <th>100000</th>
                                        <th>2</th>
                                        <th>	</th>
                            </tr>
                                
                             @endforeach 
                              @if (session()->has('session_cart'))
                               @foreach(Session::get('session_cart') as $cart => $value) 
                               <?php 
                               $name = DB::table('cakes')->where('id', '=', $value["id"] )->value('name');
                               $price = DB::table('cakes')->where('id', '=', $value["id"] )->value('price');
                               $i++;
                               ?>
                               <tr class="list">
                                           <th><?php echo $i ?></th>
                                           <th><?php echo $name ?>	</th>
                                           <th> {{$value["id"]}} </th>
                                          <th>{{$value["flavor"]}}</th>
                                          <th><?php echo $price ?></th>
                                          <th>{{$value["quantity"]}}</th>
                                          <th><a href="{{route('detelecake', ['id' => $value['id']])}}">Xóa</a></th>
                              </tr>

                               @endforeach 
                             @endif
                        </table>
                        
                       
    
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
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <input type="text" name="email" class="required" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="item"> 
                                        <p class="reset">Tin nhắn</p> 
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="control-button">
                                    <button class="button" onclick="check()" type="submit">Gửi thông tin</button>
                                </div>
                        </div>
                        </form>
                       
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
