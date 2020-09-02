	@extends('master')

	@section('content')
		<div class="container-fluid">

		<div class="row shadow-sm p-3 bg-white rounded d-flex align-items-center">
			<!-- LOGO -->
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4 order-1">
				<span class="d-xl-none d-lg-none d-md-inline d-sm-inline d-inline  p-1 navslidemenu">
					<i class="icofont-navigation-menu"></i>
				</span>
				<img src="../logo/logo_big.jpg" class="img-fluid d-xl-inline d-lg-inline d-md-none d-sm-none d-none">

				<img src="../logo/logo_med.jpg" class="img-fluid d-xl-none d-lg-none d-md-inline d-sm-none d-none" style="width: 100px">

				<img src="../logo/logo.jpg" class="img-fluid d-xl-none d-lg-none d-md-none d-sm-inline d-inline pl-2" style="width: 30px">
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
						<a href="" class="d-xl-block d-lg-block d-md-block d-none  text-decoration-none loginLink float-right"> Login | Sign-up </a>
					</div>
				</div>
			</div>
			
			<!-- Shopping-cart -->
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 order-xl-3 order-lg-3 order-md-4 order-sm-4 order-4 text-right">
				<!-- Search ICON shopping cart -->

				<div class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline searchiconBtn mr-2">
					<i class="icofont-search"></i>
				</div>

				<a href="" class="text-decoration-none d-xl-inline d-lg-inline d-md-inline d-sm-none d-none shoppingcartLink"> 
					<i class="icofont-shopping-cart"></i> 
					<span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti"> 1 </span>
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
				<a href="" class="text-decoration-none text-dark font-weight-bold"> Promotion </a>
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

		  	<a href="#"> Poromotion </a>
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

			<a href="#"> Login | Signup</a>
			<hr>

			<a href="#"> Cart [ <span class="cartNoti"> 1 </span> ]  </a>
			<hr>

			<img src="image/download.png" class="img-fluid ml-2 text-center" style="width: 150px">
			<hr>

			<p class="text-white ml-3"> Copyright &copy; <img src="../logo/logo_wh_transparent.png" style="width: 20px; height: 20px"> 2019  </p>

		</div>
	  	
	</div>

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Brand Name </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">


		<div class="row mt-5">
            <div class="col">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title"> Brand Category Name  </h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="icofont-rounded-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="icofont-rounded-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					        		<img src="image/item/saisai_one.jpg" class="img-fluid">
					            	<p class="text-truncate">Multi Item Carousel</p>
					            	<p class="item-price">
					            		<strike>250,000 Ks </strike> 
					            		<span class="d-block">230,000 Ks</span>
					            	</p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>
					        	</div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/saisai_three.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/saisai_four.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_one.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_two.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_three.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_four.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_four.jpeg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_four.jpeg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>


					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_one.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks</span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_three.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>


					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_two.png" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					</div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title"> Brand Category  </h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="icofont-rounded-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="icofont-rounded-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					        		<img src="image/item/saisai_one.jpg" class="img-fluid">
					            	<p class="text-truncate">Multi Item Carousel</p>
					            	<p class="item-price">
					            		<strike>250,000 Ks </strike> 
					            		<span class="d-block">230,000 Ks</span>
					            	</p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>
					        	</div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/saisai_three.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/saisai_four.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_one.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_two.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_three.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/giordano_four.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_four.jpeg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_four.jpeg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>


					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_one.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks</span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_three.jpg" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>


					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<img src="image/item/apple_two.png" class="img-fluid">
					                <p class="text-truncate">Multi Item Carousel</p>
					                <p class="item-price">
					                	<strike>250,000 Ks </strike> 
					                	<span class="d-block">230,000 Ks </span>
					                </p>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

					            </div>
					        </div>
					    </div>

					</div>
                </div>
            </div>
        </div>

	</div>
	


	<!-- Footer -->
	<div class="container-fluid bg-light p-5 align-content-center align-items-center mt-5">
		
		<div class="row">
	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class="icofont-fast-delivery serviceIcon maincolor"></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6>Door to Door Delivery</h6>
		        		<p class="text-muted" style="font-size: 12px">On-time Delivery</p>
			    	</div>
			  	</div>
	  		</div>

	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class="icofont-headphone-alt-2 serviceIcon maincolor"></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6> Customer Service </h6>
		        		<p class="text-muted" style="font-size: 12px">  09-779-999-915 ၊ <br> 09-779-999-913 </p>
			    	</div>
			  	</div>
	  		</div>

	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class='bx bx-undo serviceIcon maincolor'></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6 > 100% satisfaction </h6>
		        		<p class="text-muted" style="font-size: 12px"> 3 days return </p>
			    	</div>
			  	</div>
	  		</div>

	  		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="row">
				    <div class="col-md-4">
				    	<i class="icofont-credit-card serviceIcon maincolor"></i>
				    </div>
			    
			    	<div class="col-md-8">
		        		<h6> Cash on Delivery </h6>
		        		<p class="text-muted" style="font-size: 12px"> Door to Door Service </p>
			    	</div>
			  	</div>
	  		</div>
	  	</div>
	</div>
	
	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<h1> News Letter </h1>
				<p>
					Subscribe to our newsletter and get 10% off your first purchase
				</p>

			</div>
			
			<div class="offset-2 col-8 offset-2 mt-5">
				<form>
					<div class="input-group mb-3">
						<input type="text" class="form-control form-control-lg px-5 py-3" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-left-radius: 15rem; border-bottom-left-radius: 15rem">
					  	
					  	<div class="input-group-append">
					    	<button class="btn btn-secondary subscribeBtn" type="button" id="button-addon2"> Subscribe </button>
					  	</div>


					</div>
				</form>
			</div>

		</div>
	</div>


	<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
	@endsection