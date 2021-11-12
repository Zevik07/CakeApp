

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
	
    <title>{{ config('app.name', 'CakeApp') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
	<!-- Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    
	<!-- App -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <script src="{{ asset('js/admin.js') }}" defer></script>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<style>

	</style>
</head>
<body class="bg-white font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow text-primary_color">
	
		<div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
				
			<div class="w-1/2 pl-2 md:pl-0">
				<a class=" text-base xl:text-xl no-underline hover:no-underline font-bold"  href="#"> 
					Trang quản lý
				</a>
            </div>
			<div class="w-1/2 pr-0">
				<div class="flex relative inline-block float-right">
					@auth
					<div class="relative text-sm">
						<button id="userButton" class="flex items-center focus:outline-none mr-3">
							<!-- <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of User">  -->
							<span class="hidden md:inline-block">Chào, {{ Auth::user()->name }}</span>
							<svg class="pl-2 h-2 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129"><g><path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/></g></svg>
						</button>
						<div id="userMenu" class="bg-white rounded-sm shadow-lg mt-2 absolute mt-5 top-0 right-0 min-w-full overflow-auto z-30 invisible">
							<ul class="list-reset">
								<!-- <li><a href="#" class="px-4 py-2 block hover:bg-gray-800 no-underline hover:no-underline">Tài khoản</a></li> -->
								<li><hr class="border-t mx-2 border-red-400"></li>
								<li class="text-white">
									<form method="POST" action="{{ route('logout') }}">
										@csrf
										<x-dropdown-link :href="route('logout')" class="text-black"
												onclick="event.preventDefault();
															this.closest('form').submit();">
											{{ __('Đăng xuất') }}	
										</x-dropdown-link>
									</form>
								</li>
								<!-- <li><a href="{{ route('logout') }}" class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">Đăng xuất</a></li> -->
							</ul>
						</div>
					</div>
					@endauth

					<div class="block lg:hidden pr-4">
						<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
							<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
						</button>
					</div>
				</div>

			</div>


			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">
				<ul class="text-gray-400 list-reset lg:flex flex-1 items-center px-4 md:px-0">
					<li class="mr-6 my-2 md:my-0">
                        <a href=" {{ route('dashboard.index') }} " 
						class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-primary_color hover:text-primary_color
						{{ request()->is('admin/dashboard') ? 'text-primary_color' : '' }}">
                            <i class="fas fa-home fa-fw mr-3 text-blue-400"></i><span class="pb-1 md:pb-0 text-lg">Đơn đặt hàng</span>
                        </a>
                    </li>
					<li class="mr-6 my-2 md:my-0">
                        <a href="{{ route('cake-management.index') }}" 
						class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-primary_color
						{{ request()->is('admin/cake-management') ? 'text-primary_color' : '' }}">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-lg">Quản lý bánh</span>
                        </a>
                    </li>
				</ul>
				
				<!-- <div class="relative pull-right pl-4 pr-4 md:pr-0">
                    <input type="search" placeholder="Search" class="w-full bg-gray-900 text-lg text-gray-400 transition border border-gray-800 focus:outline-none focus:border-gray-600 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="fill-current pointer-events-none text-gray-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </div> -->
				
			</div>
			
		</div>

	</nav>

	<!--Container-->
	<div class="container w-full mx-auto pt-20">
		
		<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-white leading-normal">

            <div class="text-gray-700 flex flex-row flex-wrap flex-grow mt-2 color:white">

               {{$slot}}

            </div>
								
			<!--/ Console Content-->
            
		</div>
		

	</div> 
	<!--/container-->
	
	<!-- <footer class="bg-gray-900 border-t border-gray-400 shadow">	
		<div class="container max-w-md mx-auto flex py-8">

			<div class="w-full mx-auto flex flex-wrap">
				<div class="flex w-full md:w-1/2 ">
					<div class="px-8">
						<h3 class="font-bold font-bold text-gray-100">Về chúng tôi</h3>
						<p class="py-4 text-gray-600 text-sm">
							CasyCake được thành lập vào năm 2021
						</p>
					</div>
				</div>
				
				<div class="flex w-full md:w-1/2">
					<div class="px-8">
					<h3 class="font-bold font-bold text-gray-100">Kết nối</h3>
						<ul class="list-reset items-center text-sm pt-3">
						  <li>
							<a class="inline-block text-gray-600 no-underline hover:text-gray-100 hover:text-underline py-1" href="#">Facebook</a>
						  </li>
						</ul>
					</div>
				</div>
			</div>
        

		
		</div>
	</footer> -->

<script>
	
	
	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

	var userMenuDiv = document.getElementById("userMenu");
	var userMenu = document.getElementById("userButton");
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;

	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);

	  //User Menu
	  if (!checkParent(target, userMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, userMenu)) {
		  // click on the link
		  if (userMenuDiv.classList.contains("invisible")) {
			userMenuDiv.classList.remove("invisible");
		  } else {userMenuDiv.classList.add("invisible");}
		} else {
		  // click both outside link and outside menu, hide menu
		  userMenuDiv.classList.add("invisible");
		}
	  }
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}

	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}


</script>

</body>
</html>
