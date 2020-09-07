	@extends('master')

	@section('content')
		{{--  --}}

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	

	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="categories" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th> Item Name </th>
							<th>Photo</th>
							<th> Price </th>
							<th> Qty </th>
							<th> Total </th>
							{{-- <th>Discount</th> --}}
							<th>Action</th>
							
						</tr>
					</thead>
					 <tbody id="shoppingcart_table">
						

					</tbody> 
					 <tfoot id="shoppingcart_tfoot">
						
						<tr> 
							<td colspan="5"> 
								<textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="3">
								@role('Customer')
								<a class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn"> 
									Check Out 
								</button>
								@else
								<a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn"> 
									Login To Check Out 
								</a>
								@endrole
							</td>
						</tr>
					</tfoot> 
				</table>

				<a href="{{route('mainpage')}}" class="btn btn-success">Continue Shopping</a>

				<textarea class="notes" placeholder="Your note here"></textarea>

				<a href="#" class="btn btn-info float-right buy_now">Checkout</a>

			</div>
	
		</div>
		@endsection

		@section('script')
		<script type="text/javascript" src="{{asset('custom.js')}}"></script>
		@endsection