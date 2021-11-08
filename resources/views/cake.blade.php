<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ $cake->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-2 gap-x-3">
                    <div class="w-full h-auto p-4">
                        <!-- <div id="mainImg" class="w-96 h-96 mb-3 mx-auto rounded-lg"></div> -->

                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($images as $image)
                                <div class="carousel-item active">
                                    <!-- <img class="w-96 h-96 mb-3 mx-auto rounded-lg object-fill" src="http://4.bp.blogspot.com/-sbpJrKlHCXA/VOmV6vxWpXI/AAAAAAAAAQY/7jPzIfW5HA0/s1600/4.jpg" alt=""> -->
                                    <img class="w-96 h-96 mb-3 mx-auto rounded-lg object-fill" src="{{$image['url']}}" alt="">
                                    {{-- <div class="carousel-caption d-none d-md-block">
                                        
                                        <h4 class="text-semibold text-white">{{  }}</h4>      
                                    </div> --}}
                                </div>  
                                @endforeach
                                
                            </div>
                        </div>

                       <!--Other Image-->
                        <div class="w-full h-32 grid grid-cols-4 gap-x-1">
                            @foreach ($images as $image)
                                <img class="sub-img w-full h-full mb-3 mx-auto overflow-auto rounded-lg object-cover border-2" src="{{$image['url']}}" alt="">                           
                            @endforeach
                        </div>
                        <!--Other Imange end-->
                    </div>
                    <div class="w-full h-auto p-4">
                        <h4 class="font-semibold text-3xl text-black py-6">Bánh {{$cake->name}}</h4>
                        <span class="block font-normal text-xl text-red-400">{{$cake->price}}</span>
                        <span class="block py-6 mr-4 font-light text-base text-gray-400">{{$cake->desc}}</span>
                        <form action="addtocart" method="GET">
                            @csrf
                            {{-- @method('PUT') --}}
                            <input type="hidden" name="id" value="{{$cake->id}}">
                            <input type="hidden" name="name" value="{{$cake->name}}">
                            @if(count($cakeDetails)>0)
                                <p>Chọn vị:</p>
                                <div class="flex flex-wrap">
                                    @foreach($cakeDetails as $cakeDetail)
                                        <input type="radio" name="flavor" id="{{$cakeDetail['flavor']}}" value="{{$cakeDetail['flavor']}}" class="flavor-radio" >
                                        <label class="flavor-label inline-lock px-6 py-1 m-1 text-gray-700 focus:bg-gray-300 rounded-lg border-2 cursor-pointer" for="{{$cakeDetail['flavor']}}">{{$cakeDetail['flavor']}}</label>
                                        
                                    @endforeach
                                </div>
                            @endif
                            
                            <label for="quantity">Số lượng</label>
                            <input class="w-20 h-10 mx-3 rounded-lg" name="quantity" type="number" min="0">
                            <br>
                            <label for="note">Ghi chú</label>
                            <textarea class="mx-3 mt-3 rounded-lg" name="note" type="text" rows="3" cols="30"></textarea>
                            <button class="block px-6 py-3 m-3 text-white bg-red-400 hover:bg-red-500 rounded-lg transition-colors">Thêm vào giỏ hàng</button>
                        </form>
                        <hr>
                        <span class="block pt-4 font-light text-sm text-gray-400">Shop đảm bảo giao hàng không quá 24 giờ, miễn phí trả hàng nếu không đúng yêu cầu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
