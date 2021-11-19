<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'CakeApp') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="homeui/assets/css/bootstrap.min.css">

    <!-- Owl slider -->
    <link rel="stylesheet" href="homeui/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="homeui/assets/css/owl.theme.default.min.css">

    <!--Custom Styles -->
    <link rel="stylesheet" href="homeui/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    
<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.navigation')
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>CasyCake</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a class="main-page-button" href="#menu">Chọn bánh</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper1.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper2.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper3.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('storage/images/wallaper4.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Danh sách bánh</h6>
                        <h2>Những loại bánh đặc biệt</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel owl-theme">
                    @foreach ($cakes as $index => $cake)
                    <div class="item slide" data-slide-index="{{$index}}" onclick="window.location='./cake/{{$cake->id}}'">
                        <div class='card card1' style="background-image: url({{$cake->thumb()->url}})">
                            <div class="price">
                                <h6>{{$cake->price}} VND</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>
                                    {{$cake->name}}
                                </h1>
                                <p class='description'>
                                    {{$cake->desc}}
                                </p>
                                <!-- <div class="main-text-button">
                                    <div class="scroll-to-section">
                                        <a href="#reservation">
                                            Thêm vào giỏ bánh
                                            <i class="fab fa-shopping-cart"></i> 
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>
                                Về chúng tôi
                            </h6>
                            <h2>
                                Mang đến những chiếc bánh thật ngon
                            </h2>
                        </div>
                        <p>
                            CasyCake là thương hiệu bánh ngọt Việt. 
                            Được thành lập từ năm 2021 tại quận Ninh Kiều, Cần Thơ. 
                            Các sản phẩm CasyCake được làm từ các nguyên liệu nhập khẩu của các nước có truyền thống làm bánh như: 
                            Newzeland, Mỹ, Pháp, Bỉ. 
                            Với hương vị thơm ngon đặc trưng của các loại kem, bơ, sữa, phô mai, hạt hạnh nhân, chocolate... 
                            dưới bàn tay khéo léo của những người thợ làm bánh giàu kinh nghiệm. 
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <img src="/homeui/assets/images/menu-item-01.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img src="/homeui/assets/images/menu-item-02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fas fa-play"></i></a>
                            <img src="homeui/assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    @include('layouts.footer')

    <!-- jQuery -->
    <script src="homeui/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="homeui/assets/js/popper.js"></script>
    <script src="homeui/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="homeui/assets/js/owl-carousel.js"></script>
    <script src="homeui/assets/js/jquery.counterup.min.js"></script>
    <script src="homeui/assets/js/slick.js"></script> 
    
    <!-- Global Init -->
    <script src="homeui/assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
</body>
</html>