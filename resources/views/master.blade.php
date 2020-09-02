<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{csrf_token()}}">

	<title> Shopules </title>

	<!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">

    <!-- iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('icon/icofont/icofont.min.css')}}">
	<!-- Boxicon CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('icon/boxicons-master/css/boxicons.min.css')}}">
    
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/media_query.css')}}">
    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.theme.default.css')}}">

</head>
<body>

	<!-- Navigation-->
	<div class="container-fluid">

		<div class="row shadow-sm p-3 bg-white rounded d-flex align-items-center">
			<!-- LOGO -->
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4 order-1">
				<span class="d-xl-none d-lg-none d-md-inline d-sm-inline d-inline  p-1 navslidemenu">
					<i class="icofont-navigation-menu"></i>
				</span>
				<img src="{{asset('logo/logo_big.jpg')}}" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none">

				<img src="{{asset('logo/logo_med.jpg')}}" class="img-fluid d-xl-none d-lg-none d-md-inline d-sm-none d-none" style="width: 100px">

				<img src="{{asset('logo/logo.jpg')}}" class="img-fluid d-xl-none d-lg-none d-md-none d-sm-inline d-inline pl-2" style="width: 30px">
			</div>
			
			<!-- Search Bar -->
			<div class="col-xl-6 col-lg-6 col-md-4 col-sm-2 col-2 order-xl-2 order-lg-2 order-md-3 order-sm-3 order-3">
				<div class="row">
					<div class="col-lg-8 col-2 ">
						<div class="has-search d-xl-block d-lg-block d-none ">
						    <div class="input-group">
				                <input class="form-control pl-4 border-right-0 border" type="search" placeholder="Search" id="">
				                <span class="input-group-append searchBtn">
				                    <div class="input-group-text bg-transparent">
				                    	<i class="icofont-search"></i>
				                    </div>
				                </span>
				            </div>
						</div>
					</div>
					<div class="col-lg-4 col-10">
						{{-- <a href="{{route('loginpage')}}" class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right"> Login | Sign-up </a> --}}

						        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="http://127.0.0.1:8000">
                    Laravel
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Aye Aye
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="ihVqI9ps4LBDnwVre6Bwt7YYvvCXmON6iIiJpCIT">                                    </form>
                                </div>
                            </li>
                                            </ul>
                </div>
            </div>
        </nav>

						
					</div>
				</div>
			</div>
			
			<!-- Shopping-cart -->
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 order-xl-3 order-lg-3 order-md-4 order-sm-4 order-4 text-right">
				<!-- Search ICON shopping cart -->

				<div class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline searchiconBtn mr-2">
					<i class="icofont-search"></i>
				</div>

				<a href="{{route('cartpage')}}" class=" text-decoration-none d-xl-inline d-lg-inline d-md-inline d-sm-none d-none shoppingcartLink"> 
					<i class="icofont-shopping-cart"></i> 
					<span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 0 </span>
					<span> 4,800 Ks </span>
				</a>

				<a href="" class="text-decoration-none d-xl-none d-lg-none d-md-none d-sm-inline-block d-inline-block shoppingcartLink"> 
					<i class="icofont-shopping-cart"></i>
					<span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 1 </span>
				</a>

				<!-- App Download -->

				<img src="image/download.png" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none" style="width: 150px">
			</div>
		</div>
	</div>
	<div id="myPage"></div>
	
	<!-- Sub Nav (MOBILE) -->
	<div class="container subNav d-xl-block d-lg-block d-none my-3">
		<div class="row align-items-center">
			<div class="col-3 align-items-center">
				<p class="d-inline pr-3"> Shop By </p>

				<div class="dropdown d-inline-block">
          			<a class="nav-link text-decoration-none text-dark font-weight-bold d-block" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          	<span class="mr-2"> Category </span>
						<i class="icofont-rounded-down pt-2"></i>

			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Electronic Devices
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Electronic Devices
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Woman Fashion
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Woman Fashion
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Man Fashion
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Man Fashion
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Beauty
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Beauty
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Toys
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Toys
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Pets
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Pets
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Sports
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Sports
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Health
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Health
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Smart Home
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Smart Home
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Furniture
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Furniture
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Travel
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Travel
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Kitchen
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Kitchen
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Book
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Book
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Stationery
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Stationery
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Home Decor
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Home Decor
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>
			          	<div class="dropdown-divider"></div>

			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="javascript:void(0)">
			          			Baby Care
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				            		Baby Care
				            	</h6>
				              	<li><a class="dropdown-item" href="#">Submenu</a></li>
				              	<li><a class="dropdown-item" href="#">Submenu0</a></li>
				              
				            </ul>
			          	</li>

			        </ul>
        		</div>
			</div>

			<div class="col-3">
				<a href="{{route('promotionpage')}}" class="text-decoration-none text-dark font-weight-bold"> Promotion </a>
			</div>
			<div class="col-3">
				<div class="hov-dropdown d-inline-block">
          			<a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				<span class="mr-2"> Merchants </span>
						<i class="icofont-rounded-down pt-2"></i>

          			</a>
          			<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            			<a class="dropdown-item" href="#">Action</a>
            			<div class="dropdown-divider"></div>
            			<a class="dropdown-item" href="#">Another action</a>
            			<div class="dropdown-divider"></div>
            			<a class="dropdown-item" href="#">Something else here</a>
          			</div>
        		</div>
			</div>

			<div class="col-3">
				<div class="hov-dropdown d-inline-block">
          			<a class="text-decoration-none text-dark font-weight-bold" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				<span class="mr-2"> Services </span>
						<i class="icofont-rounded-down pt-2"></i>

          			</a>
          			<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            			<a class="dropdown-item" href="#">
            				Help Center
            			</a>
            			<div class="dropdown-divider"></div>
            			
            			<a class="dropdown-item" href="#">
            				Order
            			</a>
            			<div class="dropdown-divider"></div>
            			
            			<a class="dropdown-item" href="#">
            				Shipping & Delivery
            			</a>
            			<div class="dropdown-divider"></div>

            			<a class="dropdown-item" href="#">
            				Payment
            			</a>
            			<div class="dropdown-divider"></div>

            			<a class="dropdown-item" href="#">
            				Returns & Refunds
            			</a>

          			</div>
        		</div>
			</div>
		</div>
	</div>

	<!-- Sub Nav (WEB) -->
	<div id="mySidebar" class="sidebar">
		<div class="row">
			<div class="col-10">
	  			<img src="../logo/logo_med_trans.png" class="img-fluid" style="width: 100px">
			</div>
			<div class="col-2">
				<a href="javascript:void(0)" class="closebtn text-decoration-none">
			  		<i class="icofont-close-line"></i>
			  	</a>
			</div>
		</div>
		
		<div class="mt-3">
			<p class="text-muted ml-4"> Shop By </p>
			<hr>
		  	<a data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="category">
		   		Category
		   		<i class="icofont-rounded-down float-right mr-3"></i>

		  	</a>

			<div class="collapse sidebardropdown_container_category mt-3" id="category">
			    <a href="" class="py-2"> Category One </a>
			    <a href="" class="py-2"> Category Two </a>
			    <a href="" class="py-2"> Category Three </a>
			    <a href="" class="py-2"> Category Four </a>
			    <a href="" class="py-2"> Category Five </a>
			</div>

			<hr>

		  	<a href="{{route('promotionpage')}}"> Poromotion </a>
			<hr>

		  	<a data-toggle="collapse" href="#brand" role="button" aria-expanded="false" aria-controls="brand">
		   		Merchants
		   		<i class="icofont-rounded-down float-right mr-3"></i>

		  	</a>

			<div class="collapse sidebardropdown_container_category mt-3" id="brand">
			    <a href="" class="py-2"> Brand One </a>
			    <a href="" class="py-2"> Brand Two </a>
			    <a href="" class="py-2"> Brand Three </a>
			    <a href="" class="py-2"> Brand Four </a>
			    <a href="" class="py-2"> Brand Five </a>
			</div>
			<hr>

			<a data-toggle="collapse" href="#service" role="button" aria-expanded="false" aria-controls="service">
		   		Service
		   		<i class="icofont-rounded-down float-right mr-3"></i>
		  	</a>

			<div class="collapse sidebardropdown_container_category mt-3" id="service">
			    <a href="" class="py-2"> Help Center </a>
			    <a href="" class="py-2"> Order </a>
			    <a href="" class="py-2"> Shipping & Delivery </a>
			    <a href="" class="py-2"> Payment </a>
			    <a href="" class="py-2"> Returns & Refunds </a>
			</div>
			<hr>

			<a href=""> Login | Signup</a>
			<hr>

			<a href="{{route('cartpage')}}"> Cart [ <span class="cartNoti"> 1 </span> ]  </a>
			<hr>

			<img src="image/download.png" class="img-fluid ml-2 text-center" style="width: 150px">
			<hr>

			<p class="text-white ml-3"> Copyright &copy; <img src="../logo/logo_wh_transparent.png" style="width: 20px; height: 20px"> 2019  </p>

		</div>
	  	
	</div>

	
	<!-- Carousel -->
	
	 @yield('content')

	

  	<footer class="py-3 mt-5">
    	<div class="container">
    		<div class="text-center pb-3">
				<a href="#myPage" title="To Top" class="text-white to_top text-decoration-none">
				    <i class="icofont-rounded-up" style="font-size: 20px"></i>
				</a>
			</div>

      		<p class="m-0 text-center text-white">Copyright &copy; <img src="../logo/logo_wh_transparent.png" style="width: 30px; height: 30px"> 2019</p>
    	</div>
  	</footer>








	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<!-- BOOTSTRAP JS -->
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.js')}}"></script>

    <script type="text/javascript" src="{{asset('custom.js')}}"></script>

</body>
</html>