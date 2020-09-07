	@extends('master')

	@section('content')
			{{--  --}}

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
    		<h1 class="text-center text-white"> Brand Name:{{$brand->name}}</h1>
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

                    @foreach($brand->items as $item)

					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					        		<img src="{{asset($item->photo
					        		)}}" class="img-fluid" width="100" height="100">
					            	<p class="text-truncate"> {{$item->name}}</p>
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
					        @endforeach
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
					        		<img src="{{asset('image/item/apple_one.jpg')}}" class="img-fluid">
					            	<p class="text-truncate">{{$brand->name}}</p>
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
					            	<img src="{{asset('image/item/saisai_three.jpg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/saisai_four.jpg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/giordano_one.jpg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/giordano_two.jpg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/giordano_three.jpg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/giordano_four.jpg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/apple_four.jpeg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/apple_four.jpeg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/apple_one.jpg')}}" class="img-fluid">
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
					            	<img src="{{asset('image/item/apple_three.jpg')}}" class="img-fluid">
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