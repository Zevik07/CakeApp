<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           gio hang
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="cart-page">
                    <div class="body-cart">
                    <h2 class="big-title"> Giỏ hàng</h2>
                    <div class="wp-content-cart">
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
                            <tr class="list">
                                <th>1</th>
                                <th>Bánh ngọt</th>
                                <th>BN123</th>
                                <th>Status</th>
                                <th>100000</th>
                                <th>2</th>
                                <th>	</th>
                            </tr>
                            <tr class="list">
                                <th>1</th>
                                <th>Bánh ngọt</th>
                                <th>BN123</th>
                                <th>Status</th>
                                <th>100000</th>
                                <th>2</th>
                                <th>	</th>
                            </tr>
                        </table>
                        <div class="form">
                            <h2 class="titleuser">Thông tin khách hàng</h2>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="item"> 
                                        <p class="reset">Họ và tên {{Session::get('id')}}
                                            <span class="red">*</span>
                                        </p>
                                        
                                        <div>
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" name="" class="required" placeholder="Ho va ten">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="item"> 
                                        <p class="reset">Địa chỉ 
                                            <span class="red">*</span>
                                        </p>
                                        <div>
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <input type="text" name="" class="required" placeholder="Ho va ten">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="item"> 
                                        <p class="reset"> Điện thoại 
                                            <span class="red">*</span>
                                        </p>
                                        <div>
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" name="" class="required" placeholder="Ho va ten">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="item"> 
                                        <p class="reset"> Email 
                                            <span class="red">*</span>
                                        </p>
                                        <div>
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <input type="text" name="" class="required" placeholder="Ho va ten">
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
                                    <a href="" title="Gui thong tin">Gửi thông tin</a>
                                    <a href="" title="Gui thong tin">Chọn thêm sản phẩm</a>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
